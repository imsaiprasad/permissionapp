<?php
$conn=mysqli_connect("localhost","root","","ourproject");
if($conn)
{
    // echo "connection established";
     $uname=$_POST['firstname'];
    //  $pwd=$_POST['lname'];

     $res=mysqli_query($conn,"SELECT senderid,requestname,description,status from queriestable where receiverid='{$uname}'"); 
     $output="";
     if(mysqli_num_rows($res)>0)
     {

     $output='<table class="col-xs-7 table-bordered table-striped table-condensed table-fixed">
     <thead>
         <tr>
             <th class="col">Full Name</th>
             <th class="col">ROLL_NO</th>
             <th class="col">problem statements</th>
             <th class="col">Desciption</th>
             <th class="col">Approval</th>
             <th class="col">Decline</th>
         </tr>
     </thead>';
     while($row=mysqli_fetch_assoc($res))
     {
         $output.="<tr><td>{$row['senderid']}</td><td>{$row['requestname']}</td><td>{$row['description']}</td>
         
     </tr>";
     }
     $output.="</table>";

    }
    echo $output;
 }
 mysqli_close($conn);

?>
