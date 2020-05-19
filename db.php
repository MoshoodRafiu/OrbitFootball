<?php
$server = "localhost:3306";
$uname = "ewanoffn_league";
$pass = "Olakunle27";

$connect = mysqli_connect($server,$uname,$pass);
mysqli_connect($server,$uname,$pass) or die("Couldnt connect to database");
mysqli_select_db($connect, $uname);

