<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Edit Product</title>
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
     $sql = "UPDATE prod SET id=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save2']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET name='$valueToChange' WHERE id='$valueToSearch'";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save3']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET category='$valueToChange' WHERE id='$valueToSearch'";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save4']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET price=$valueToChange WHERE id=$valueToSearch ";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save5']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET diab=$valueToChange WHERE id=$valueToSearch ";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save6']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET chlo=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save7']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET dent=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
    }
if(isset($_POST['save8']))
   {
     $valueToSearch = $_POST['valueToSearch'];
     $valueToChange = $_POST['valueToChange'];
     $sql = "UPDATE prod SET rating=$valueToChange WHERE id=$valueToSearch";
     $result = mysqli_query($conn, $sql); 
   }
?> 

<form action="SearchProd.php" method="post">
     
<label id="first"> Enter ID :</label>
<input type="text" name="valueToSearch">
<button type="submit" name="save">Check Details</button><br/><br/>

</form>

<form action="EditProd.php" method="post">

<label id="first"> Enter ID :</label>
<input type="text" name="valueToSearch"><br/>    
<label id="first"> Enter New Value :</label>
<input type="text" name="valueToChange"><br/>
<button type="submit" name="save1">Change ID</button>
<button type="submit" name="save2">Change NAME</button>
<button type="submit" name="save3">Change CATEGORY</button>
<button type="submit" name="save4">Change PRICE</button> <br/>
<button type="submit" name="save8">Change RATING</button>
<button type="submit" name="save5">Change Daibetes Status</button>
<button type="submit" name="save6">Change Chlolesterol Status</button>
<button type="submit" name="save7">Change Dental Status</button>

</form>

<form><br/><br/>
<input type="button" value="Back" onclick="window.location.href='/Admin/Admin.php'" />
</form>

</body>
</html>