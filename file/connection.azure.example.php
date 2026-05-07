<?php
$servername = "nik-bloodbank-mysql.mysql.database.azure.com";
$username = "bloodadmin";
$password = "CHANGE_ME";
$dbname = "bloodbank";

$conn = mysqli_init();

mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);

if (!mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, NULL, MYSQLI_CLIENT_SSL)) {
    die("Could not connect MySQL: " . mysqli_connect_error());
}
?>
