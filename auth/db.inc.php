<?php
// DB Info
$host = 'srv1376.hstgr.io';
$db = 'u741213861_test';
$dbUser = 'u741213861_yj54390';
$dbPwd = 'Inje019182*';

/*
* MySQLi
*/
// try {
//     $conn = mysqli_connect($host, $dbUser, $dbPwd, $db);
//     mysqli_query($conn, 'SET NAMES utf8');
//     $conn->query("SET NAMES 'UTF8'");
// } catch (mysqli_sql_exception $e) {
//     die('Connection failed: ' . $e->getMessage());
// }

/*
* PDO (PHP Data Objects)
*/
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $dbUser, $dbPwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
