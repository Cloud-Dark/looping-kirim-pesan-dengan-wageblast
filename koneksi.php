<?php
include 'fungsi.php';

$host = $config->dbhost;
$username = $config->dbusername;
$password = $config->dbpassword;
$db = $config->dbname;

// echo "$host . $username . $password . $db ";
$koneksi = mysqli_connect($host, $username, $password, $db) or die("gagal");
 ?>
