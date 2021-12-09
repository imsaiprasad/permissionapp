<?php
session_start();

$con=mysqli_connect("localhost","root","","ourproject");

$uname=$_SESSION['uname'];

$query=mysqli_query($con,"SELECT * from queriestable where receiverid='{$uname}' AND status='no'");

?>
<!DOCTYPE html>
<html>
    <body>

    
    <p id="alright">im here</p>
    
    <table       align="center" border="1px" style="width: 600px; line-height:40px"    >
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
                            
                           
                         <form method="post" action="justforreference.php" target="_self">
                                <label for="check">YES
                                <input type="checkbox"  name="check" value="<?php echo $rows['senderid']?>" >
                                </label>
                                <label for="nocheck">NO
                                <input type="checkbox"  name="nocheck" value="<?php echo $rows['senderid']?>">
                                </label>
                                <button type="submit">submit</button>
                                </form>
                            
           </td>   
</tr>

<?php

                 }
                 ?>
              
            </table>
          
            

    </body>
</html>
