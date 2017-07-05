<?php
ini_set( "display_errors", true );
date_default_timezone_set( "America/Los_Angeles" );  // http://www.php.net/manual/en/timezones.php
define( "DB_DSN", "mysql:host=localhost;dbname=cms" );
define( "DB_USERNAME", "cmsUser" );
define( "DB_PASSWORD", "" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "HOMEPAGE_NUM_ARTICLES", 5 );
define( "ADMIN_USERNAME", "cmsAdminUser" );
define( "ADMIN_PASSWORD", "adminUser" );
require( CLASS_PATH . "/Article.php" );

function handleException( $exception ) {
  echo "Sorry, a problem occurred. Please try later.";
  echo $exception;
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
