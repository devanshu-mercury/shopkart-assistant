<?php
   session_start();
    $conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "";
}
    $sql1 = "DELETE FROM cart";
    $result1 = mysqli_query($conn, $sql1);
   if(session_destroy()) {
      header("Location: login.php");
   }
?>