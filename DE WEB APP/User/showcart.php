<?php
ob_start();
include('session.php');
$conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "<br><br>";
}
     
$result = mysqli_query($conn,"SELECT id,name,sum(price),sum(quantity) FROM cart GROUP BY name");
$result1 = mysqli_query($conn,"SELECT sum(price),sum(quantity) FROM cart");
$row1 = mysqli_fetch_array($result1);
$total=$row1[0];
echo "<h1>Added Products<h1/>";
echo "<table border='1'>
<tr>
<th>Product ID</th>
<th>Name</th>
<th>Price</th>
<th>Quantity</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "</tr>";
}

echo "<tr>";
echo "<td>" ."". "</td>";
echo "<td>" ."Total Amount". "</td>";
echo "<td>" .$total. "</td>";
echo "<td>" ."". "</td>";
echo "</tr>";

echo "</table>";
?> 

<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>CART</title>
</head>

<body>
<form action="logout.php" method="post">
<button type="submit" name="save">Checkout</button>
</body>

</html>