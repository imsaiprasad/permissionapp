$conn=mysqli_connect("localhost","root","ourproject",);
if($conn)
{
    echo "connection established";
}
else{
    echo "error while connecting";
}