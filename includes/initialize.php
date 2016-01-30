<?php
//require_once("functions.php");
//require_once("session.php");
//require_once("database.php");
//require_once("user.php");



        // Define the core paths
        // Define them as absolute paths to make sure that require_once works as expected

        // DIRECTORY_SEPARATOR is a PHP pre-defined constant
        // (\ for Windows, / for Unix)

defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
$server_name = $_SERVER['SERVER_NAME'];
$server_local = "localhost";
//$server_phpstorm = "PhpStorm 8.0.3";
$server_phpstorm = "PhpStorm 10.0.3";

//http://localhost:63342/rajah_production/public/admin/login.php
    if ($server_name === $server_local || $server_name === $server_phpstorm) {

    defined('SITE_ROOT') ? null : define('SITE_ROOT', 'C:' . DS . 'xampp' . DS . 'htdocs' . DS . 'rajah_production');
    defined('SESSION_PATH')? null : define('SESSION_PATH', 'C:' . DS . 'xampp' . DS . 'tmp' . DS . 'session_rajah');

    defined('MY_URL_PUBLIC') ? null : define('MY_URL_PUBLIC','http://localhost/rajah_production/public/');
    defined('MY_URL_ADMIN') ? null : define('MY_URL_ADMIN',MY_URL_PUBLIC.DS.'/admin/');




    } else {
            defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'home' . DS . 'www' . DS . '1fe720ae68582bc8524d72e4d0afafcb' . DS . 'web');

            defined('SESSION_PATH') ? null : define('SESSION_PATH', DS . 'home' . DS . 'www' . DS . '1fe720ae68582bc8524d72e4d0afafcb' . DS . 'tmp');

            defined('MY_URL_PUBLIC') ? null : define('MY_URL_PUBLIC','http://www.ikamy.ch/public/');
            defined('MY_URL_ADMIN') ? null : define('MY_URL_ADMIN',MY_URL_PUBLIC.DS.'/admin/');

    }

defined('LIB_PATH') ? null : define('LIB_PATH', SITE_ROOT.DS.'includes');


$logo="<span style='color: #0016b0'><b>i</b></span>";
$logo.="<span style='color: green'><b>k</b></span>";
$logo.="<span style='color: red'><b>a</b></span>";
$logo.="<span style='color: darkorchid'><b>m</b></span>";
$logo.="<span style='color: royalblue'><b>y</b></span>";
$logo.="<span style='color:red'><b>.</b></span>";
$logo.="<span style='color: palevioletred'><b>c</b></span>";
$logo.="<span style='color: darkcyan'><b>h</b></span>";
//$logo.="<b>".$logo."</b>";
defined('LOGO')   ? null : define("LOGO", $logo);


                // load config file first
//require_once(LIB_PATH.DS.'config.php');

            // load basic functions next so that everything after can use them
require_once(LIB_PATH.DS.'functions'.DS.'functions.php');

                // load core objects
require_once(LIB_PATH.DS.'session.php');
//require_once(LIB_PATH.DS.'functions_security.php');

//put functions
require_once(LIB_PATH.DS . 'functions'.DS. "security_csrf_token_functions.php");
require_once(LIB_PATH.DS . 'functions'.DS."security_request_forgery_functions.php");
require_once(LIB_PATH.DS . 'functions'.DS."security_mcrypt_functions.php");
require_once(LIB_PATH.DS . 'functions'.DS."security_allowed_get.php");
require_once(LIB_PATH.DS . 'functions'.DS."reset_token_functions.php");

//require_once(LIB_PATH.DS . "function_links.php"); //todo clean up and move to function


require_once(LIB_PATH.DS.'config.php');

$use_database_mysqli=true;

if($use_database_mysqli){ require_once(LIB_PATH.DS.'database_mysqli.php'); }else { require_once(LIB_PATH.DS.'database.php');}
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');
require_once(LIB_PATH.DS.'Form.php');
require_once(LIB_PATH.DS.'FormValidation.php');
require_once(LIB_PATH.DS.'phpmailer'.DS.'class.phpmailer.php');
require_once(LIB_PATH.DS.'phpmailer'.DS.'class.smtp.php');
require_once(LIB_PATH.DS.'phpmailer'.DS.'language'.DS.'phpmailer.lang-am.php');
require_once(LIB_PATH.DS.'MyPHPMailer.php');


            // load database-related classes
require_once(LIB_PATH.DS.'user.php');
require_once(LIB_PATH.DS.'UserType.php');
require_once(LIB_PATH.DS.'FailedLogin.php');
require_once(LIB_PATH.DS.'BlacklistIp.php');
require_once(LIB_PATH.DS."BrowserDetect.php");
require_once(LIB_PATH.DS.'Client.php');
require_once(LIB_PATH.DS.'Project.php');

require_once(LIB_PATH.DS.'Category1.php');
require_once(LIB_PATH.DS.'Category2.php');
require_once(LIB_PATH.DS.'Category.php');

require_once(LIB_PATH.DS.'InvoiceActual.php');
require_once(LIB_PATH.DS.'InvoiceSend.php');
require_once(LIB_PATH.DS.'InvoiceEstimate.php');
require_once(LIB_PATH.DS.'Links.php');
require_once(LIB_PATH.DS.'LinksCategory.php');

require_once(LIB_PATH.DS.'MyCigarette.php');
require_once(LIB_PATH.DS.'MyCigaretteByPeriod.php');
require_once(LIB_PATH.DS.'Currency.php');
require_once(LIB_PATH.DS.'MyExpensePerson.php');
require_once(LIB_PATH.DS.'MyExpenseType.php');
require_once(LIB_PATH.DS.'MyExpense.php');

//require_once(LIB_PATH.DS.'photograph.php');
//require_once(LIB_PATH.DS.'comment.php');
//require_once(LIB_PATH.DS.'links.php');


?>