<?php
/**
 * Plugin Name: Contact Form 7 Referrer URL 
 * Plugin URI: http://www.pravinparmar.com
 * Description: This plugin allows you to add a hidden referrer field that will be available for you on the email. It is compatible with cache, because it fills the field with JS.
 * Version: 1.0.1
 * Author: Pravin Parmar
 * Author URI: http://www.pravinparmar.com
 */
 
/*Activation checks*/ 
require_once(dirname(__FILE__) . '/activation-checks.php');
 
/*Contact form 7 api use*/
require_once(dirname(__FILE__) . '/form-tag.php');

/* Tag generator */
require_once(dirname(__FILE__) . '/tag.php');
 ?>