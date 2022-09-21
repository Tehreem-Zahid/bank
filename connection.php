<?php 
$sname="localhost";
$uname="root";
$pass="";
$DBname="spark";
$conn=mysqli_connect($sname,$uname,$pass);
$DB=mysqli_select_db($conn,$DBname);
?>