<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Remove User</title>
</head>

<body>
 

<?php
$conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "<br><br>";
}
if(isset($_POST['save']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $sql = "DELETE FROM cust WHERE id=$valueToSearch";
     if ($conn->query($sql) === TRUE) 
     {  echo "Record deleted successfully"; } 
     else { echo "Error deleting record: " . $conn->error; }
     }
?> 

<form action="RemoveUser.php" method="post"> 
<label id="first"> Enter ID :</label><br/>
<input type="text" name="valueToSearch"><br/>
<button type="submit" name="save">Remove</button>

<form>
<input type="button" value="Back" onclick="window.location.href='/Admin/Admin.php'" />
</form>

</body>
</html>