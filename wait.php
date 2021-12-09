<?php
session_start();

$con=mysqli_connect("localhost","root","","ourproject");

$uname=$_SESSION['uname'];
$query=mysqli_query($con,"SELECT * from queriestable where receiverid='{$uname}'");

?>
<!DOCTYPE html>
<html>
    <body>
        
    <table align="centre" border="1px" style="width:600px;line-height:40px;">
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
                            <!-- <script>
                                function onlyOne(checkbox) {
                                    var checkboxes = document.getElementsByName('check')
                                    checkboxes.forEach((item) => {
                                        if (item !== checkbox) item.checked = false
                                    })
                                }
                            </script> -->
                          

                            <form method="post" action="example2.php" >
                                <label for="checkbox">YES
                                <input type="checkbox" class="getvalue" name="check[]" value=<?php echo $rows['senderid']?>>
                                </label>
                                <label for="nocheck">NO
                                <input type="checkbox"  class="getvalue" name="nocheck[]" value=<?php echo $rows['senderid']?> >
                                </label>
                            </form>
                                
           </td>   
</tr>

<?php

                 }
                 ?>
              
            </table>
    </body>
</html>
