<?php

include_once('inc/class-wp-bootstrap-navwalker.php');

// Register Resources
function ilvcoco_web() {


	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_register_style('owl-css', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
	wp_register_style('owl-theme-css', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
	wp_register_style( 'stylesheet', get_stylesheet_uri() );

	wp_enqueue_style('owl-css');
	wp_enqueue_style('owl-theme-css');
	wp_enqueue_style( 'bootstrap-css' );
	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_style( 'aos-css' );

	
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'owl-js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '1.1', true );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.1', true );


	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_script('owl-js');
	wp_enqueue_script('main-js');


}
add_action( 'wp_enqueue_scripts', 'ilvcoco_web' );

// Menus
add_action( 'after_setup_theme', 'register_nero_primary_menu' );
function register_nero_primary_menu() {
	register_nav_menus(array( 
		'primary'	=> 	__( 'Primary Menu', 'I love coco Web' ),
		'footer'	=>	__( 'Footer Menu', 'I love coco Web' ),
		'product'	=>	__( 'Product Menu', 'I love coco Web' ),
		'category'	=>	__( 'Category Menu', 'I love coco Web' ),

	 ));
}

// custom logo

add_theme_support('custom-logo');

function ilvcoco_web_custom_logo(){
	$defaults = array(
		'header_text' => array( 'site-title', 'site_description' ),
	);	
}

add_action('after_setup_theme', 'ilvcoco_web_custom_logo');



// ----------------- theme options page

add_action("admin_menu", "mythemeoptions");

function mythemeoptions()
{

  add_menu_page(
    "theme-options", //page title
    "Theme-options", //Menu title
    "manage_options", //Capability
    "theme-options", //Menu Slug
    "mycustom_options", //callback funtion
    "dashicons-admin-generic" //icon

  );
}
// ==========

function mycustom_options()
{
  // we have to link our custom settings
  ?>
  <div>
  <h1>Theme Options Panel</h1>
  <?php settings_errors(); ?>
    <form action="options.php" method="post">
      <?php
      settings_fields("section");
      do_settings_sections("theme-options");
      submit_button();
      ?>
    </form>
  </div>
<?php
}

// ===========

// theme options settings page
function theme_options_setting()
{

  add_settings_section(
    "section", //id of setting section
    "All Page", // title
    "", // callback function
    "theme-options" // page
  );

  // add_settings_field(

   add_settings_field(
    "facebook_url",
    "Facebook Url",
    "display_fb_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "twitter_url",
    "Twitter Url",
    "display_twitt_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "insta_url",
    "Instagram Url",
    "display_insta_url",
    "theme-options",
    "section"

  );

  add_settings_field(
    "linkedin",
    "linkedin Link",
    "display_linkedin_link",
    "theme-options",
    "section"

  );

  add_settings_field(
    "whatsap_number",
    "Whatsapp Number",
    "display_whatsap_number",
    "theme-options",
    "section"

  );

  add_settings_field(
    "youtube_link",
    "Youtube Link",
    "display_youtube_link",
    "theme-options",
    "section"

  );


  add_settings_field(
    "address",
    "Address",
    "display_address",
    "theme-options",
    "section"

  );

  add_settings_field(
    "contact_number",
    "Contact Number",
    "display_contact_number",
    "theme-options",
    "section"

  );

  add_settings_field(
    "fax",
    "Fax",
    "display_fax",
    "theme-options",
    "section"

  );

  add_settings_field(
    "email",
    "Email",
    "display_email",
    "theme-options",
    "section"

  );










  add_settings_field(
    "footer_text",
    "Footer Text",
    "display_footer_text",
    "theme-options",
    "section"

  );

 





  // we need to add this setting to area
  // register_setting("section", "channel_name");
  register_setting("section", "facebook_url");
  register_setting("section", "twitter_url");
  register_setting("section", "insta_url");
  register_setting("section", "linkedin");
  register_setting("section", "whatsap_number");
  register_setting("section", "youtube_link");
  register_setting("section", "address");
  register_setting("section", "contact_number");
  register_setting("section", "fax");
  register_setting("section", "email");


  register_setting("section", "footer_text");
}

add_action("admin_init", "theme_options_setting");

function display_fb_url()
{?>
  <input type="url" name="facebook_url" value="<?php echo get_option('facebook_url'); ?>" id="facebook_url" /> 
<?php
}

function display_twitt_url(){
  ?>
  <input type="url" name="twitter_url" value="<?php echo get_option('twitter_url'); ?>" id="twitter_url" /> 
<?php
}

function display_insta_url(){
  ?>
  <input type="url" name="insta_url" value="<?php echo get_option('insta_url'); ?>" id="insta_url" /> 
<?php
}

function display_whatsap_number(){
  ?>
  <input type="text" name="whatsap_number" value="<?php echo get_option('whatsap_number'); ?>" id="whatsap_number" /> 
<?php
}


function display_linkedin_link(){
  ?>
  <input type="url" name="linkedin" value="<?php echo get_option('linkedin'); ?>" id="linkedin" /> 
<?php
}

function display_youtube_link(){
  ?>
  <input type="url" name="youtube_link" value="<?php echo get_option('youtube_link'); ?>" id="youtube_link" /> 
<?php
}


function display_address(){
  ?>
  <input type="text" name="address" value="<?php echo get_option('address'); ?>" id="address" /> 
<?php
}

function display_contact_number(){
  ?>
  <input type="text" name="contact_number" value="<?php echo get_option('contact_number'); ?>" id="contact_number" /> 
<?php
}

function display_fax(){
  ?>
  <input type="text" name="fax" value="<?php echo get_option('fax'); ?>" id="fax" /> 
<?php
}


function display_email(){
  ?>
  <input type="email" name="email" value="<?php echo get_option('email'); ?>" id="email" /> 
<?php
}





function display_footer_text(){
	?>
	<input type="text" name="footer_text" value="<?php echo get_option('footer_text'); ?>" id="footer_text" /> 
  <?php
  }

