<?php
session_start();

$con=mysqli_connect("localhost","root","","ourproject");

$uname=$_SESSION['uname'];

$query=mysqli_query($con,"SELECT * from queriestable where receiverid='{$uname}' AND NOT status='ACCEPTED'");

?>
<!DOCTYPE html>
<html>
    <body>

    <button id="imbutton">Load</button>
    <button id="save">save</button>
    <p id="alright"></p>
        
    <table           >
                <thead>
                    <tr>
                        <th class="col">senderid</th>
                        
                        <th class="col">requestname</th>
                        <th class="col">description</th>
                        <th class="col">Approval</th>
                    </tr>
                </thead>
                
<?php
                while($rows=mysqli_fetch_assoc($query))
                {
             
?>
<tr>
    <td>
        <?php echo $rows['senderid']; ?>
    </td>
    <td>
        <?php echo "&nbsp&nbsp".$rows['requestname']; ?>
    </td>
    <td>
        <?php echo $rows['description']; ?>
    </td>
    
        <td class="col">
                          
                         <form method="post" action="#">
                                <label for="checkbox">YES
                                <input type="checkbox" class="getvalue" name="check[]" value="abc">
                                </label>
                                <label for="nocheck">NO
                                <input type="checkbox"  class="getvalue" name="nocheck[]" value="<?php echo $rows['senderid']?>" >
                                </label>
                                <input type="submit" value="submit"> 
                                </form>
                            
           </td>   
</tr>

<?php

                 }
                 ?>
              
            </table>
            <?php
    if(isset($_POST["submit"]))
             {
               
              if(!empty($_POST["check"]))
              {
               foreach($_POST["check"] as $lets)
               {
                //    $update=mysqli_query($con,"UPDATE queriestable SET status ='yes' where senderid='{$lets}'"); 
                echo $lets;
                   
               }
            }
        }
               ?>

    </body>
</html>
