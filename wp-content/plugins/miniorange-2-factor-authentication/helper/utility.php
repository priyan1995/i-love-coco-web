<?php

/** miniOrange enables user to log in through mobile authentication as an additional layer of security over password.
    Copyright (C) 2015  miniOrange

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>
* @package 		miniOrange OAuth
* @license		http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
*/

class MoWpnsUtility
{

	public static function icr() 
	{
		$email 			= get_option('mo2f_email');
		$customerKey 	= get_option('mo2f_customerKey');
		if( ! $email || ! $customerKey || ! is_numeric( trim( $customerKey ) ) )
			return 0;
		else
			return 1;
	}
	
	public static function check_empty_or_null( $value )
	{
		if( ! isset( $value ) || empty( $value ) )
			return true;
		return false;
	}

    public static function rand()
    {
        $length = wp_rand(0, 15);
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[wp_rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
	
	public static function is_curl_installed()
	{
		if  (in_array  ('curl', get_loaded_extensions()))
			return 1;
		else 
			return 0;
	}
	
	public static function is_extension_installed($name)
	{
		if  (in_array  ($name, get_loaded_extensions()))
			return true;
		else
			return false;
	}
	
	public static function get_client_ip() 
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
			return $_SERVER['HTTP_CLIENT_IP'];
		} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
			return $_SERVER['HTTP_X_FORWARDED_FOR'];
		} else {
			return $_SERVER['REMOTE_ADDR'];
		}
		return '';
	}

	public static function check_if_valid_email($email)
	{
		$emailarray = explode("@",$email);
		if(sizeof($emailarray)==2)
			return in_array(trim($emailarray[1]), MoWpnsConstants::$domains);
		else
			return false;
	}

	public static function check_user_password_strength($user,$password)
	{
		
			if(!self::check_if_strong_password_enabled_for_user_role($user->roles))
				return "success";
			else if(strlen($password) > 5 && preg_match("#[0-9]+#", $password) && preg_match("#[a-zA-Z]+#", $password) && preg_match('/[^a-zA-Z\d]/', $password))
				return "success";
			else
				return "false";
		
		return "success";
	}

	public static function check_if_strong_password_enabled_for_user_role($userroles)
	{
		$enforce_strong_pass = MoWpnsUtility::get_mo2f_db_option('mo2f_enforce_strong_passswords_for_accounts', 'get_option');

		switch($enforce_strong_pass)
		{
			case "all":
				return true;
																	break;
			case "admin":
				if(!in_array("administrator", $userroles))
					return false;									
																	break;
			case "user":
				if(in_array("administrator", $userroles))
					return false;
																	break;
		}
		return true;
	}

	public static function get_current_url()
	{
		$protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$url	   = $protocol . $_SERVER['HTTP_HOST']  . $_SERVER['REQUEST_URI'];
		return $url;
	}

	//Function to handle recptcha
	function verify_recaptcha($response)
	{
		$error = new WP_Error();
		if(!empty($response))
		{
			if(!mo2f_ReCaptcha::recaptcha_verify($response))
				$error->add('recaptcha_error', __( '<strong>ERROR</strong> : Invalid Captcha. Please verify captcha again.'));
			else
				return true;
		}
		else
			$error->add('recaptcha_error', __( '<strong>ERROR</strong> : Please verify the captcha.'));
		return $error;
	}


	function sendIpBlockedNotification($ipAddress, $reason)
	{
		global $moWpnsUtility;
		$subject = 'User with IP address '.$ipAddress.' is blocked | '.get_bloginfo();
		$toEmail = get_option('admin_email_address');
        	$content = "";
		if(get_option('custom_admin_template'))
		{
			$content = get_option('custom_admin_template');
			$content = str_replace("##ipaddress##",$ipAddress,$content);
		}
		else
			$content = $this->getMessageContent($reason,$ipAddress);

		if(isset($content))
			return $this->wp_mail_send_notification($toEmail,$subject,$content);
	}

	function wp_mail_send_notification($toEmail,$subject,$content){
		$headers = array('Content-Type: text/html; charset=UTF-8');
		wp_mail( $toEmail, $subject, $content, $headers);

	}
	
	
	function sendNotificationToUserForUnusualActivities($username, $ipAddress, $reason)
	{
		$content = "";
		//check if email not already sent
		if(get_option($ipAddress.$reason)){
			return json_encode(array("status"=>'SUCCESS','statusMessage'=>'SUCCESS'));
		}
		
		global $moWpnsUtility;

		$user = get_user_by( 'login', $username );
		if($user && !empty($user->user_email))
			$toEmail = $user->user_email;
		else
			return;
		
		$mo_wpns_config = new MoWpnsHandler();
		if($mo_wpns_config->is_email_sent_to_user($username,$ipAddress))
			return;
	
		$fromEmail = get_option('mo2f_email');
		$subject   = 'Sign in from new location for your user account | '.get_bloginfo();

		if(get_option('custom_user_template'))
		{
			$content = get_option('custom_user_template');
			$content = str_replace("##ipaddress##",$ipAddress,$content);
			$content = str_replace("##username##",$username,$content);
		}
		else
			$content = $this->getMessageContent($reason,$ipAddress,$username,$fromEmail);
		
		      $mo_wpns_config->audit_email_notification_sent_to_user($username,$ipAddress,$reason);
		      $status =  $this->wp_mail_send_notification($toEmail,$subject,$content,$fromEmail);
              return $status;
	}

	//Check if null what will be the message
	function getMessageContent($reason,$ipAddress,$username=null,$fromEmail=null)
	{
		switch($reason)
		{
			case MoWpnsConstants::LOGIN_ATTEMPTS_EXCEEDED:
				$content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has exceeded allowed failed login attempts on your website <b>".get_bloginfo()."</b> and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange" ;
				return $content;
			case MoWpnsConstants::IP_RANGE_BLOCKING:
				$content = "Hello,<br><br>The user's IP Address <b>".$ipAddress."</b> was found in IP Range specified by you in Advanced IP Blocking and we have blocked his IP address for further access to your website <b>".get_bloginfo()."</b>.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange" ;
				return $content;
			case MoWpnsConstants::BLOCKED_BY_ADMIN:
				$content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has blocked by admin and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange" ;
				return $content;
			case MoWpnsConstants::ATTACK_LIMIT_EXCEEDED:
			     $content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has attack limit exceed on your website <b>".get_bloginfo()."</b> and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange";
			     return $content;
			case MoWpnsConstants::RATE_LIMIT_EXCEEDED:
			     $content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has rate limit exceed on your website <b>".get_bloginfo()."</b> and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange";
			     return $content;
			case MoWpnsConstants::RATE_LIMIT_EXCEEDED_CRAWLER_ATTACK:
			     $content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has found as a crawler on your website <b>".get_bloginfo()."</b> and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange";
			     return $content;
			case MoWpnsConstants::LOGGED_IN_FROM_NEW_IP:
				$content = "Hello ".$username.",<br><br>Your account was logged in from new IP Address <b>".$ipAddress."</b> on website <b>".get_bloginfo()."</b>. Please <a href='mailto:".$fromEmail."'>contact us</a> if you don't recognise this activity.<br><br>Thanks,<br>".get_bloginfo() ;
				return $content;
			case MoWpnsConstants::FAILED_LOGIN_ATTEMPTS_FROM_NEW_IP:
				$subject = 'Someone trying to access you account | '.get_bloginfo();
				$content =  "Hello ".$username.",<br><br>Someone tried to login to your account from new IP Address <b>".$ipAddress."</b> on website <b>".get_bloginfo()."</b> with failed login attempts. Please <a href='mailto:".$fromEmail."'>contact us</a> if you don't recognise this activity.<br><br>Thanks,<br>".get_bloginfo() ;
				return $content;
			default:
				if(is_null($username))
					$content = "Hello,<br><br>The user with IP Address <b>".$ipAddress."</b> has exceeded allowed trasaction limit on your website <b>".get_bloginfo()."</b> and we have blocked his IP address for further access to website.<br><br>You can login to your WordPress dashaboard to check more details.<br><br>Thanks,<br>miniOrange" ;
				else
					$content   = "Hello ".$username.",<br><br>Your account was logged in from new IP Address <b>".$ipAddress."</b> on website <b>".get_bloginfo()."</b>. Please <a href='mailto:".$fromEmail."'>contact us</a> if you don't recognise this activity.<br><br>Thanks,<br>".get_bloginfo() ;
				return $content;
		}
	}

	public static function hasLoginCookie(){
		if(isset($_COOKIE)){
			if(is_array($_COOKIE)){
				foreach($_COOKIE as $key => $val){
					if(strpos($key, 'wordpress_logged_in') === 0){
						return true;
					}
				}
			}
		}
		return false;
	}
	function getCurrentBrowser()
	{
		$useragent = $_SERVER['HTTP_USER_AGENT'];
		if(empty($useragent))
			return false;

		$useragent = strtolower($useragent);
		if(strpos($useragent, 'edge') 		!== false)
			return 'edge';
		else if(strpos($useragent, 'opr') 	!== false)
			return 'opera';
		else if(strpos($useragent, 'chrome') !== false || strpos($useragent, 'CriOS') !== false)
			return 'chrome';
		else if(strpos($useragent, 'firefox') 	!== false)
			return 'firefox';
		else if(strpos($useragent, 'msie') 	  	!== false || strpos($useragent, 'trident') 	!==false)
			return 'ie';
		else if(strpos($useragent, 'safari') 	!== false)
			return 'safari';
	}

	public static function getFeatureStatus(){
		$status='';
		$status.="#";
		
		if(get_site_option('mo2f_visit_waf'))
			$status.="WF1";
		if(get_site_option('WAF'))
			$status.="F1";
		if(get_site_option('mo2f_visit_login_and_spam'))
			$status.="LS1";
		if(MoWpnsUtility::get_mo2f_db_option('mo2f_enable_brute_force', 'get_option'))
			$status.="BF1";
		if(get_site_option('mo2f_visit_malware'))
			$status.="M1";
		if(get_site_option('mo2f_visit_backup'))
			$status.="B1";
		if(get_site_option('mo2f_two_factor'))
			$status.="TF1";
		if(time()-get_site_option("mo_2fa_pnp")<2592000)
			$status.='U1';			
		if(mo2f_is_customer_registered())
			$status.="CT";
		$status.="R".rand(0,1000);
		return $status;
	}
	function checkPlugins(){
			$installed="";
			$filedirname=dirname(dirname(dirname(__FILE__)));
			if(file_exists($filedirname."/wordfence/wordfence.php")){
				$installed.="wordfence;";
			}
			if(file_exists($filedirname."/all-in-one-wp-security-and-firewall/wp-security.php")){
				$installed.="all-in-one-wp-security-and-firewall;";
			}
			if(file_exists($filedirname."/better-wp-security/better-wp-security.php")){
				$installed.="better-wp-security;";
			}
			if(file_exists($filedirname."/sucuri-scanner/sucuri.php")){
				$installed.="sucuri-scanner;";
			}
			return $installed;
			
		}

	public static function get_mo2f_db_option($value, $type){
		if($type == 'site_option'){
			$db_value = get_site_option($value, $GLOBALS[$value]);
		}else{
			$db_value = get_option($value, $GLOBALS[$value]);
		}
		return $db_value;
	}
	public static function checkSecurity(){

		$guestcustomer = new Customer_Setup();

		$guestcustomer->guest_audit();
	}
	public static function mo_2fa_send_configuration($send_all_configuration=false){
        global $Mo2fdbQueries;
		   $user_object = wp_get_current_user();
		   $mo2f_configured_2FA_method 	= $Mo2fdbQueries->get_user_detail( 'mo2f_configured_2FA_method', $user_object->ID );
           $key                			= get_option('mo2f_customerKey');
            $is_plugin_active_for_network	= is_plugin_active_for_network( MoWpnsConstants::TWO_FACTOR_SETTINGS); 
            $is_onprem          		= get_option('is_onprem');
            $WAFEnabled          		= get_option('WAFEnabled');
            $WAFLevel 					= get_option('WAF');
            $NoOf2faUsers				= $Mo2fdbQueries->get_no_of_2fa_users();
            $EmailTransactions  		= MoWpnsUtility::get_mo2f_db_option('cmVtYWluaW5nT1RQ', 'site_option');
            $SMSTransactions    		= get_site_option('cmVtYWluaW5nT1RQVHJhbnNhY3Rpb25z')?get_site_option('cmVtYWluaW5nT1RQVHJhbnNhY3Rpb25z'):0; 
            $SQLInjection       	   	= get_option('SQLInjection');
            $XSSAttack          		= get_option('XSSAttack');
            $RFIAttack          		= get_option('RFIAttack');
            $LFIAttack          		= get_option('LFIAttack');
            $Rate_request          		= get_option('Rate_request');
            $limitAttack          		= get_option('limitAttack');
            $RCEAttack          		= get_option('RCEAttack');
            $mo_wpns_countrycodes		= get_option('mo_wpns_countrycodes');
            $mo2f_enable_brute_force	= get_site_option('mo2f_enable_brute_force');
            $space					= "'<span>&nbsp;&nbsp;&nbsp;</span>";
            
        $plugin_configuration ="<br><br><I>Plugin Configuration :-</I>".$space."On-premise:'".($is_onprem?"Yes":"No"). $space."2FA method:'" . ($mo2f_configured_2FA_method==''?"Not selected":$mo2f_configured_2FA_method).$space."No. of 2FA users :'".$NoOf2faUsers.$space."Remaining Email transaction:'".$EmailTransactions.$space."Remaining SMS Transactions:'".$SMSTransactions.$space."WAF enabled:'".$WAFEnabled.($WAFEnabled?$space."WAF level : '".$WAFLevel:"").$space.(is_multisite()?"Multisite Enabled:"."'Yes'":"Single-site:"."'Yes").$space."Brute force enabled : '".($mo2f_enable_brute_force?"Yes":"No").((mo2f_is_customer_registered())?($space."Customer Key:'".$key):($space."Customer Registered:'No"));
        if(is_multisite()){
        	$plugin_configuration = $plugin_configuration.$space.($is_plugin_active_for_network?"Network activated:'Yes":"Site activated:'Yes");
        }
        if(!$send_all_configuration)
        	return $plugin_configuration."'";

        $plugin_configuration = $plugin_configuration.$space."SQL Injection:'".$SQLInjection .$space."XSS Attack:'".$XSSAttack.$space."RFI Attack:'".$RFIAttack.$space."Rate request:'".$Rate_request.$space."Limit Attack:'".$limitAttack.$space."RCE Attack:'".$RCEAttack;

        $plugin_configuration = get_option('mo_wpns_countrycodes')?$plugin_configuration.$space."mo_wpns_countrycodes:'".$mo_wpns_countrycodes:$plugin_configuration.$space."Country Blocking:'Disabled";

        $browser_block = array('mo_wpns_block_chrome','mo_wpns_block_firefox','mo_wpns_block_ie','mo_wpns_block_safari','mo_wpns_block_opera','mo_wpns_block_edge');
        foreach($browser_block as $browser){
            if(get_option($browser))
                $plugin_configuration = $plugin_configuration.$space.$browser.":'".get_option($browser);
        }
        $plugin_configuration=$plugin_configuration.$space."Plugin_version:'" . MO2F_VERSION.$space.  "PHP_version:'" . phpversion().$space."Wordpress_version:" . get_bloginfo('version');
        return $plugin_configuration;
    }
	
}
