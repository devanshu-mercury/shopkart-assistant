<?php
$conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "<br><br>";
}
     
$result = mysqli_query($conn,"SELECT * FROM prod");
echo "<h1>Products Available<h1/>";
echo "<table border='1'>
<tr>
<th>Product ID</th>
<th>Name</th>
<th>Category</th>
<th>Price</th>
<th>Rating</th>
<th>Diabetes</th>
<th>Cholesterol</th>
<th>Dental</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row[0] . "</td>";
echo "<td>" . $row[1] . "</td>";
echo "<td>" . $row[2] . "</td>";
echo "<td>" . $row[3] . "</td>";
echo "<td>" . $row[4] . "</td>";
echo "<td>" . $row[5] . "</td>";
echo "<td>" . $row[6] . "</td>";
echo "<td>" . $row[7] . "</td>";
echo "</tr>";
}

echo "</table>";
?> 

<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Product List</title>
</head>


</html>