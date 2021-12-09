<?php
session_start();

$con=mysqli_connect("localhost","root","","ourproject");
// $_SESSION['fname'];
$username=$_POST['fname'];
$pwd=$_POST['lname'];
$result=mysqli_query($con,"SELECT * from admins where uname='{$username}' AND password='{$pwd}'");

if(mysqli_num_rows($result)>0)
{
    $_SESSION['uname']=$username;
    header("location: requestview.html");
    exit;
    // include_once(filename)
}