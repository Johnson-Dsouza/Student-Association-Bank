<?php
   include("config.php");
   session_start();
 
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // account and password sent from form 
      
      $myaccount = mysqli_real_escape_string($db, $_POST['account_no']);
      $mypassword = mysqli_real_escape_string($db, $_POST['pswd']); 
      
      $sql = "SELECT account_no FROM registration WHERE account_no = '$myaccount' and pswd = '$mypassword'";
      $result = mysqli_query($db, $sql);
    
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myaccount and $mypassword, table row must be 1 row
		
      if($count == 1) {
        //  session_register("myaccount");
         $_SESSION['myaccount'] = "myaccount";
         $_SESSION['login_user'] = $myaccount;
         header("location: functionality.php");
         
      }else {
         echo '<script>alert("Please Enter valid Account Number and Password");</script>';
      }
   }
   
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/loginStyle.css" type="text/css">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');


            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                font-family: 'Montserrat', sans-serif;
            }

            body{
                background: #84889c;
            }

            h1{
                font-size: 100px;
                font-family: 'Courier New', Courier, monospace;
                color: whitesmoke;
                text-align: center;
            }

            hr{
                position: relative;
                background-color: white;
                top: -10px;
                height: 1px;
            }
            h3{
                text-align: center;
                position: relative;
                top: 0px;
                color: whitesmoke;
                text-shadow: 2px 2px #000000;
            }
            h2{
                font-size: 50px;
                color: #ebd0ce;
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                position: relative;
                top: 30px;
            }

            .wrapper{
                min-height: 100vh;
                display: flex;
                align-items: center;
                position: relative;
                left: 510px;
                top: -110px;
                margin-top: -10px;
            }

            .login_form{
                background: #545871;
                padding: 25px;
                border-radius: 5px;
                width: 500px;
            }

            .login_form .title{
                text-align: center;
                font-size: 20px;
                text-transform: uppercase;
                color: #ebd0ce;
                letter-spacing: 5px;
                font-weight: 700;
            }

            .form_wrap{
                margin-top: 15px;
            }

            .form_wrap .input_wrap{
                margin-bottom: 15px;
            }

            .form_wrap .input_wrap:last-child{
                margin-bottom: 0;
            }

            .form_wrap .input_wrap label{
                display: block;
                margin-bottom: 3px;
                color: #9597a6;
            }

            .form_wrap .input_grp{
                display: flex;
                justify-content: space-between;
            }

            .form_wrap .input_grp  input[type="number"]{
                width: 165px;
            }

            .form_wrap  input[type="number"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap  input[type="number"]:focus{
                border-color: #ebd0ce;
            }

            .form_wrap .input_grp input[type="password"]{
                width: 165px;
            }

            .form_wrap input[type="password"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap .input[type="password"]:focus{
                border-color: #ebd0ce;
            }

            .form_wrap .submit_btn{
                width: 100%;
                background: #ebd0ce;
                padding: 10px;
                border: 0;
                border-radius: 3px;
                text-transform: uppercase;
                letter-spacing: 3px;
                cursor: pointer;
            }

            .form_wrap .submit_btn:hover{
                background: #ffd5d2;
            }
        </style>
    </head>
    <body>
        <h1>Student Association Bank</h1>
        <hr/>
        <h3>Be wary of SMSes that ask you to share your personal details</h3>
        <h2>Welcome to Student Association Bank ATM</h2>

        
        <div class="wrapper">
            <div class="login_form">
                <div class="title">
                    Login Form
                </div>

                <form action="" method="POST">
                    <div class="form_wrap">
                        <div class="inp_grp">

                            <div class="input_wrap">
                                <label for="card">Card Number</label>
                                <input type="number" id="account_no" name="account_no" placeholder="Card-Number" required>
                            </div>
                            <div class="input_wrap">
                                <label for="password">Password</label>
                                <input type="password" id="pswd" name="pswd" placeholder="Password" required>
                            </div>

                            <div class="input_wrap">
                                <input type="submit" value="Submit" class="submit_btn">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>