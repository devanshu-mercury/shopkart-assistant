<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Admin</title>
</head>



<body  style="background-color:tomato;">
    
<h2 style="text-align:center;color:white;"> ADMIN MENU </h2>

<hr>
<hr>

<h3 style="text-align:center; color:white;"> <u> User Table </u> </h3> 

<hr>

<form align="center" >
<input type="button" value="Add User" onclick="window.location.href='/Admin/AddUser.php'" />
</form>
<form align="center">
<input type="button" value="Remove User" onclick="window.location.href='/Admin/RemoveUser.php'" />
</form>
<form align="center">
<input type="button" value="Edit User" onclick="window.location.href='/Admin/EditUser.php'" />
</form>
<form align="center">
<input type="button" value="Search User" onclick="window.location.href='/Admin/SearchUse.php'" />
<input type="button" value="User List" onclick="window.location.href='/Admin/Userlist.php'" />
</form>

<hr>
<hr>

<h3 style="text-align:center;color:white;"> <u> Product Table </u> </h3>

<hr>

<form align="center">
<input type="button" value="Add Product" onclick="window.location.href= '/Admin/AddProd.php' " />
</form>
<form align="center">
<input type="button" value="Remove Product" onclick="window.location.href= '/Admin/RemoveProd.php' " />
</form>
<form align="center">
<input type="button" value="Edit Product" onclick="window.location.href= '/Admin/EditProd.php' " />
</form>
<form align="center">
<input type="button" value="Search Product" onclick="window.location.href= '/Admin/SearchPro.php' " />
<input type="button" value="Product List" onclick="window.location.href='/Admin/Prodlist.php'" />
</form>
<br/>

<body>
<form>
<input type="button" value="Back" onclick="window.location.href = '/MainMenu.php' " />
</form>
</body>


</body>
</html>