<?php
ini_set( "display_errors", true );
date_default_timezone_set( "Australia/Sydney" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=sd16" );
define( "DB_USERNAME", "sd16" );
define( "DB_PASSWORD", "xBQucvDL29FhgY" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 999 );
define( "ADMIN_USERNAME", "admin" );
define( "ADMIN_PASSWORD", "ff43c90f87d90859c8f618fe6961538b" );
define( "ARTICLE_IMAGE_PATH", "images/articles" );
define( "IMG_TYPE_FULLSIZE", "fullsize" );
define( "IMG_TYPE_THUMB", "thumb" );
define( "ARTICLE_THUMB_WIDTH", 120 );
define( "JPEG_QUALITY", 85 );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
