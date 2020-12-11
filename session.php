<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   
   $ses_sql = mysqli_query($db,"select account_no from registration where account_no = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql, MYSQLI_ASSOC);
   

   $login_session = $row['account_no'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }

    $_SESSION["account_no"] = "$login_session";
?>