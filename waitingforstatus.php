<?php
session_start();
$con=mysqli_connect("localhost","root","","ourproject");
$rollnum=$_SESSION['rollnum'];   // username which i set in login form 

$qrun=mysqli_query($con,"SELECT  status FROM queriestable where uname='{$rollnum}' AND NOT status='no' AND receiverid='{}");


?>
