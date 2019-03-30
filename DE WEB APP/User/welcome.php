
 <?php
 ob_start();
 include('session.php');
$conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
if(!$conn){
echo "Not conncted..";
}else
{
echo "";
    
}    $c="" ;
     $valu="";
     $sql = "SELECT * FROM cust WHERE id=$login_session ";
     $result = mysqli_query($conn, $sql);
     $row = mysqli_fetch_assoc($result) ;
  if(isset($_POST['save']))
{   $prodid=$_POST["id"];
    $sql1 = "SELECT id,name,price FROM prod WHERE id=$prodid ";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1) ;

    $sql = "INSERT INTO cart (id, name, price, quantity)
    VALUES ('".$row1["id"]."','".$row1["name"]."','".$row1["price"]."','1')";
    $result = mysqli_query($conn,$sql);
}

 if(isset($_POST['save3']))
{   
    $sql1 = "DELETE FROM cart";
    $result1 = mysqli_query($conn, $sql1);
}

 if(isset($_POST['save2']))
{   
    $prodid=$_POST["id"];
    $conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
    $sql1 = "SELECT * FROM prod WHERE id=$prodid ";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1) ;
    $rat=$row1['rating'];
    $kate=$row1['category'];
    
    $sql = "SELECT * FROM prod WHERE category='$kate' AND rating>$rat";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result) ;
    $count = mysqli_num_rows($result);
    $valu=$row['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Better Product Available & Click Add to Scan')</script>";
          $valu=$row['id'];
          $c=$row['name'];
          }
      else
      { echo "<script type='text/javascript'>alert('Better Product Unavailable')</script>";
        $valu=$row1['id'];
      }
    
}

 if(isset($_POST['save4']))
{   
    $URL="https://technocratana.000webhostapp.com/User/showcart.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
}

  if(isset($_POST['save1']))
{   $prodid=$_POST["id"];
    $conn=mysqli_connect("localhost","id3560358_test123","test321","id3560358_test");
    $sql1 = "SELECT * FROM prod WHERE id=$prodid ";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1) ;
    $kate=$row1['category'];

    $sql = "SELECT * FROM cust WHERE id=$login_session ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result) ;
    
    if( ($row1['diab']and$row['diab']) and ($row1['chlo']and$row['chlo']) and ($row1['dent']and$row['dent']) )
    { $sql2 = "SELECT * FROM prod WHERE diab=false AND chlo=false AND dent=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
          }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
    else if( ($row1['diab']and$row['diab']) and ($row1['chlo']and$row['chlo']) )
    { $sql2 = "SELECT * FROM prod WHERE diab=false AND chlo=false AND category='$kate' LIMIT 1";
       $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
    
     else if( ($row1['chlo']and$row['chlo']) and ($row1['dent']and$row['dent']) )
    { $sql2 = "SELECT * FROM prod WHERE chlo=false AND dent=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
    else if( ($row1['diab']and$row['diab']) and ($row1['dent']and$row['dent']) )
    { $sql2 = "SELECT * FROM prod WHERE diab=false AND dent=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
       else if( ($row1['diab']and$row['diab']) )
    { $sql2 = "SELECT * FROM prod WHERE diab=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
    else if( ($row1['chlo']and$row['chlo']) )
    { $sql2 = "SELECT * FROM prod WHERE chlo=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    
    else if( ($row1['dent']and$row['dent']) )
    { $sql2 = "SELECT * FROM prod WHERE dent=false AND category='$kate' LIMIT 1";
      $result2 = mysqli_query($conn, $sql2);
      $row2 = mysqli_fetch_assoc($result2) ;
      $count = mysqli_num_rows($result2);
      $valu=$row2['id'];
      
      if($count == 1)
      {  echo "<script type='text/javascript'>alert('Harmful Product. Add Alternative ')</script>";
          $valu=$row2['id'];
          $c=$row2['name'];
      }
      else
      { echo "<script type='text/javascript'>alert('Harmful Product. No Alternative')</script>";
      }
    }
    else
    { echo "<script type='text/javascript'>alert('Safe For Consumption')</script>";
      $valu=$prodid ;
    }
    
    
}

?> 

<html>
     <head>
      <title>Welcome </title>
   </head>
   
<body>
      <h1>Welcome <?php echo $row['name']; ?></h1> 
      <h3>Personal Details</h3>
      <label>Age : <?php echo $row['age']; ?></label><br/>
      <label>Diabetes : <?php if($row['diab'])
                         { $k="Yes"; }
                         else { $k="No"; }
                         echo $k; ?></label><br/Age>
      <label>Chlolesterol : <?php if($row['chlo'])
                         { $k="Yes"; }
                         else { $k="No"; }
                         echo $k; ?></label><br/>
      <label>Dental Condition : <?php if($row['dent'])
                         { $k="Yes"; }
                         else { $k="No"; }
                         echo $k; ?></label><br/>
                         
      <h3>Shopping</h3>
   
<form action="welcome.php" method="post"> 

<label id="first"> Enter/Scan Product ID :</label>
<input type="text" value="<?php echo $valu ?>" name="id"><label><?php echo $c; ?></label><br/><br/>
<button type="submit" name="save0">Scan & Add</button>
<button type="submit" name="save">Add To Cart</button>
<button type="submit" name="save3">Clear Cart</button>
<button type="submit" name="save4">View Cart</button><br/><br/>
<button type="submit" name="save1">Check Health For Implications</button>
<button type="submit" name="save2">Check For Higher Rated Alternative</button><br/><br/>

</form>
<form action="showprod.php" method="post">
<button type="submit" name="save">Products</button><br/>
<br/>
<form>
<input type="button" value="Sign Out" onclick="window.location.href='/User/logout.php'" />
</form>

</body>

</html>