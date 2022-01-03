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
$sql = "DELETE FROM eleman WHERE (tcno = $tcno); ";
$sql1 = "DELETE FROM hastalikkaydi WHERE (tcno = $tcno);";
$sql2 = "DELETE FROM coviddurumu WHERE (tcno = $tcno);";
$sql3 = "DELETE FROM recete WHERE (tcno = $tcno);";

$result = $conn->query($sql);
$result1 = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);
header("Location: " . "sorgular.php");
