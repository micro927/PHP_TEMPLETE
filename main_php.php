<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);

date_default_timezone_set("Asia/Bangkok");
include('main_connection.php');
require('main_function.php');

$php_page = 'php/php_' . $page;
if (file_exists($php_page)) {
    include($php_page);
}
