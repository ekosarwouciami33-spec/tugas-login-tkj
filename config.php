<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "db_login";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
?>