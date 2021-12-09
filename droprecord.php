<?php
$con=mysqli_connect("localhost","root","","ourproject");
// $name=$_POST[""];
$rollnum=$_POST[""];
//im here just reseting the password 
$querycheck=mysqli_query($con,"SELECT * FROM students where rollnumber ='$rollnum'");
if(mysqli_num_rows($querycheck)>0)
{
    $update=mysqli_query($con,"UPDATE students SET password='' where  rollnumber ='$rollnum'");

    echo "Password Successfully Changed";
}
?>