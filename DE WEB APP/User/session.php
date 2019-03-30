<?php
   error_reporting(E_ERROR | E_PARSE);
   session_start();
   include('config.php');
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id from cust where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>