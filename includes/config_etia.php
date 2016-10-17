<?php

$server_name = $_SERVER['SERVER_NAME'];
$server_local = "localhost";
$server_phpstorm = "PhpStorm 2016.1.2";

defined('LOCALHOST_FOLDER')   ? null : define("LOCALHOST_FOLDER","rajah_production");

if ($server_name == $server_local) {
    define("DB_SERVER", "localhost");
} elseif ($server_name == $server_phpstorm) {
    define("DB_SERVER", "localhost");
} else {
    define("DB_SERVER", "mysql.ikamy.ch");
}

defined('DB_NAME')   ? null : define("DB_NAME", "ikamych2");
defined('DB_USER')   ? null : define("DB_USER", "kamy333");
defined('DB_PASS')   ? null : define("DB_PASS", "orange11");


//defined('EMAIL_USERNAME')   ? null : define("EMAIL_USERNAME", "ikamy.ch@bluewin.ch");
//defined('EMAIL_PASSWORD')   ? null : define("EMAIL_PASSWORD", "orange11");
//defined('MY_HOST')   ? null : define("MY_HOST", "smtpauths.bluewin.ch");

defined('EMAIL_USERNAME')   ? null : define("EMAIL_USERNAME", "kamy@ikamy.ch");
defined('EMAIL_PASSWORD')   ? null : define("EMAIL_PASSWORD", "orange11");
defined('MY_HOST')   ? null : define("MY_HOST", "mail.infomaniak.ch");



?>