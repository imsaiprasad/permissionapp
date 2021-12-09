<?php

session_start();
$uname=$_SESSION['uname'];
$con=mysqli_connect("localhost","root","","ourproject");
    if(isset($_POST['check']))
             {
                 $status="ACCEPTED";
             $studentname=$_POST['check'];
             $upd=mysqli_query($con,"update queriestable SET status='{$status}' where senderid='{$studentname}' AND receiverid='{$uname}'");
             header("location:requestview.html");
             exit;
            //  if($upd)
            //  {
            //      echo "updated successfully";

            //  }

        }

       else if(isset($_POST['nocheck']))
             {
                 $status="DECLINED";
             $studentname=$_POST['nocheck'];
             $upd=mysqli_query($con,"update queriestable SET status='{$status}' where senderid='{$studentname}' AND receiverid='{$uname}'");
             header("location:requestwithoutajax.php");
             exit;
            //  if($upd)
            //  {
            //      echo "updated Declined";
            //  }

        }
               ?>