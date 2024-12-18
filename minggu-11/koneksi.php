<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "dbuser";
$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {

    echo "koneksi tidak ok";
}
?>