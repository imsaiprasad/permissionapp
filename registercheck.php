<?php
session_start();
$con=mysqli_connect("localhost","root","","ourproject");

$fname=$_POST[''];
$lname=$_POST[''];
$uname=$_POST[''];
$email=$_POST[''];
$pwsd=$_POST[''];
$mbno=$_POST[''];
$gender=$_POST[''];

$check=mysqli_query($con,"SELECT * FROM users admins where firstname='{$fname}'AND lastname='{$lname}' AND uname ='{$uname}'AND email ='{$email}'AND password ='{$pswd}'AND mobile ='{$mbno}'AND gender ='{$gender}'");

if(mysqli_num_rows($check)>0)
{
    echo "Account Already Exits";
}
else{
    $insert=mysqli_query($con,"INSERT INTO students VALUES()");
    $_SESSION['username']=$uname;
    header("location: ");
    exit;
}
?>