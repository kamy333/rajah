<?php

$server_name = $_SERVER['SERVER_NAME'];
$server_local = "localhost";
$server_phpstorm = "PhpStorm 2016.1.2";

defined('LOCALHOST_FOLDER')   ? null : define("LOCALHOST_FOLDER","rajah_production");

if ($server_name == $server_local || $server_name == $server_phpstorm) {
    define("DB_SERVER", "localhost");

//} elseif ($server_name == $server_phpstorm) {
//    define("DB_SERVER", "localhost");
//    $prefix="hhbz_";
} else {
    define("DB_SERVER", "hhbz.myd.infomaniak.com");
//    define("DB_SERVER", "mysql.ikamy.ch");
//    define("DB_SERVER", "h2mysql14");


//h2mysql14
}
$prefix="";
defined('DB_NAME')   ? null : define("DB_NAME", $prefix."hhbz_ikamych2");
defined('DB_USER')   ? null : define("DB_USER", "hhbz_kamy");
defined('DB_PASS')   ? null : define("DB_PASS", "orange11");

//defined('DB_NAME')   ? null : define("DB_NAME", "ikamych2");
//defined('DB_USER')   ? null : define("DB_USER", "kamy333");
//defined('DB_PASS')   ? null : define("DB_PASS", "orange11");

//defined('EMAIL_USERNAME')   ? null : define("EMAIL_USERNAME", "ikamy.ch@bluewin.ch");
//defined('EMAIL_PASSWORD')   ? null : define("EMAIL_PASSWORD", "orange11");
//defined('MY_HOST')   ? null : define("MY_HOST", "smtpauths.bluewin.ch");

defined('EMAIL_USERNAME')   ? null : define("EMAIL_USERNAME", "kamy@ikamy.ch");
defined('EMAIL_PASSWORD')   ? null : define("EMAIL_PASSWORD", "orange11");
defined('MY_HOST')   ? null : define("MY_HOST", "mail.infomaniak.ch");



?>