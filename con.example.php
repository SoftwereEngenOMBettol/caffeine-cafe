<?php
// Copy this file to con.php and fill in your own database credentials.
// con.php is gitignored so your credentials are never published.

session_start();

$host     = "localhost";
$user     = "root";      // XAMPP default
$password = "";          // XAMPP default is empty
$database = "phplogin";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_set_charset($con, "utf8mb4");
?>
