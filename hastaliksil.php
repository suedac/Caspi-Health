<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "caspi";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$tcno = $_SESSION["tcno"];

$sql1 = "DELETE FROM hastalikkaydi WHERE (tcno = $tcno);";




$result1 = $conn->query($sql1);
header("Location: " . "sorgular.php");
