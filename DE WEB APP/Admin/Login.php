<html>
<head>
<style>
label{display:inline;width:10px;margin-bottom:10px;}
</style>
<title>Enter Login Details</title>
</head>



<body  style="background-color:tomato;">
    
<h2 style="color:white;" align="center">  Admin Login  </h2>

<hr class="style4" >

<br>

<form name="loginForm" method="post" action="Admin.php">
<table width="20%" bgcolor="white" align="center">

<tr>
<td>Username:</td>
<td><input type="text" size=25 name="userid"></td>
</tr>

<tr>
<td>Password:</td>
<td><input type="Password" size=25 name="pwd"></td>
</tr>

<tr>
<td ><input type="Reset"></td>
<td> </td>
<td><input type="submit" onclick="return check(this.form)" value="Login" align="right"></td>
</tr>

</table>
</form>

<script language="javascript">
function check(form)
{

if(form.userid.value == "admin" && form.pwd.value == "admin")
{
	return true;
}
else
{
	alert("Error Password or Username")
	return false;
}
}
</script>

</body>
</html>