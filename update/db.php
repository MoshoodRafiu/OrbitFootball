<?php
session_start();

if (!isset($_SESSION['name'])){
echo "<script>location.href='login.php'</script>";
exit();}
$server = "localhost";
$name = "root";
$pass = "";
$dbname = "epeleague";

$connect = mysqli_connect($server,$name,$pass);
mysqli_connect("localhost","root","") or die("Couldnt connect to database");
mysqli_select_db($connect, $dbname);
