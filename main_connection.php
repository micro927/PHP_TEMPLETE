<?php
$db_host = "";
$db_user = "";
$db_password = "";
$db_name = "";
try {
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->exec('SET NAMES utf8');
} catch (PDOException $e) {
    // echo $e->getMessage();
}
