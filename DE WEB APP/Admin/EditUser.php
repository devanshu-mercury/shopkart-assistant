<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Edit User</title>
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
if(isset($_POST['save1']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET id=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save2']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET pass='$valueToChange' WHERE id='$valueToSearch'";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save3']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET name='$valueToChange' WHERE id='$valueToSearch' ";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save4']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET age=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save5']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET diab=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save6']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET chlo=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save7']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE cust SET dent=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
?> 

<form action="SearchUser.php" method="post">
     
<label id="first"> Enter ID :</label>
<input type="text" name="valueToSearch">
<button type="submit" name="save">Check Details</button><br/><br/>

</form>

<form action="EditUser.php" method="post">

<label id="first"> Enter ID :</label>
<input type="text" name="valueToSearch"><br/>    
<label id="first"> Enter New Value :</label>
<input type="text" name="valueToChange"><br/>
<button type="submit" name="save1">Change ID</button>
<button type="submit" name="save2">Change PASS</button>
<button type="submit" name="save3">Change NAME</button>
<button type="submit" name="save4">Change AGE</button> <br/>
<button type="submit" name="save5">Change Daibetes Status</button>
<button type="submit" name="save6">Change Chlolesterol Status</button>
<button type="submit" name="save7">Change Dental Status</button>

</form>

<form><br/><br/>
<input type="button" value="Back" onclick="window.location.href='/Admin/Admin.php'" />
</form>

</body>
</html>