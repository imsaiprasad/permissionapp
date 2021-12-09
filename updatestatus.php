<?php
session_start();
$con=mysqli_connect("localhost","root","","ourproject");
$update=mysqli_query($con,"UPDATE queriestable SET status ='ACCEPTED' where senderid={$_POST['click']}");
?>