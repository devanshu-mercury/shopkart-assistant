<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Add User</title>
</head>

<body>
 
 <?php

$conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "Connection Sucessfully";
}
  if(isset($_POST['save']))
{   
    $val1 = $_POST['IsD'] = $_POST['IsD'] == 'true' ? true : false;
    $val2 = $_POST['IsC'] = $_POST['IsC'] == 'true' ? true : false;
    $val3 = $_POST['IsT'] = $_POST['IsT'] == 'true' ? true : false;
    
    $sql = "INSERT INTO cust (id, pass, name, age, diab, chlo, dent)
    VALUES ('".$_POST["id"]."','".$_POST["pass"]."','".$_POST["name"]."','".$_POST["age"]."','$val1','$val2','$val3')";

    $result = mysqli_query($conn,$sql);
}

?> 

<form action="AddUser.php" method="post"> 

<label id="first"> Enter ID :</label><br/>
<input type="text" name="id"><br/>

<label id="first">Password</label><br/>
<input type="password" name="pass"><br/>

<label id="first">Name</label><br/>
<input type="text" name="name"><br/>

<label id="first">Age</label><br/>
<input type="number" name="age"><br/>


<label>Diabetic ? </label>
<label>Yes
   <input type="radio" name="IsD" value="true" />
</label> 
<label>No
   <input type="radio" name="IsD" value="false" />
</label>
<br/>

<label>Chlolesterol ? </label>
<label>Yes
   <input type="radio" name="IsC" value="true" />
</label> 
<label>No
   <input type="radio" name="IsC" value="false" />
</label>
<br/>

<label>Dental Condition ? </label>
<label>Yes
   <input type="radio" name="IsT" value="true" />
</label> 
<label>No
   <input type="radio" name="IsT" value="false" />
</label>
<br/>
<br/>





<button type="submit" name="save">save</button>

</form>

<form>
<input type="button" value="Back" onclick="window.location.href='/Admin/Admin.php'" />
</form>

</body>
</html>