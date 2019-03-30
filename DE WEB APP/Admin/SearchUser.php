<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}
</style>
<title>Search User</title>
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
     $valueToSearch = $_POST['valueToSearch'];
     $sql = "SELECT id,pass,name,age,diab,chlo,dent FROM cust WHERE id=$valueToSearch ";
     $result = mysqli_query($conn, $sql); 
     if (mysqli_num_rows($result) > 0) 
       {
         while ($row = mysqli_fetch_assoc($result)) 
         {
          echo "ID : ", $row['id'], "<br>" ;
          echo "Password : ", $row['pass'], "<br>" ;
          echo "Name : ", $row['name'], "<br>" ;
          echo "Age : ", $row['age'], "<br>" ;
          
          if($row['diab'])
          { $d='Yes' ; }
          else
          { $d='No'  ; }
          
          echo "Diabetes : ", $d , "<br>" ;
          
           if($row['chlo'])
          { $d='Yes' ; }
          else
          { $d='No'  ; }
          
          echo "Chlolesterol : ", $d , "<br>" ;
          
           if($row['dent'])
          { $d='Yes' ; }
          else
          { $d='No'  ; }
          
          echo "Dental Condition : ", $d , "<br>" ;
           
          }
        }
?> 

</body>
</html>