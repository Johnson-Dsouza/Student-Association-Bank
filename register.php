<?php

    include 'connection.php';
    
    if(isset($_POST["submit"])){

    $sql = "INSERT INTO registration (fname, lname, email, gender, aadhaar, pan, addresss, pswd)
    VALUES ('".$_POST["fname"]."','".$_POST["lname"]."','".$_POST["email"]."','".$_POST["gender"]."','".$_POST["aadhaar"]."','".$_POST["pan"]."','".$_POST["addresss"]."','".$_POST["pswd"]."')";

    if ($conn->query($sql) === TRUE) {
    echo "
        <script type= 'text/javascript'>
            alert('Account created successfully');
        </script>";
    } 
    else 
    {
        echo 
        "<script type= 'text/javascript'>
            alert('Error: " . $sql . "<br>" . $conn->error."');
        </script>";
    }

    $conn->close();
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Registration Page</title>
        <link rel="stylesheet" href="CSS/functionalityStyle.css" type="text/css">
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
                /* font-family: 'Courier New', Courier, monospace; */
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
                color: red;
                text-align: center;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                position: relative;
                top: -50px;
            }

            
            .wrapper{
                min-height: 100vh;
                display: flex;
                /* justify-content: center; */
                align-items: center;
                position: relative;
                left: 510px;
                margin-top: -10px;
            }

            .registration_form{
                background: #545871;
                padding: 25px;
                border-radius: 5px;
                width: 500px;
            }

            .registration_form .title{
                text-align: center;
                font-size: 20px;
                text-transform: uppercase;
                color: #ebd0ce;
                letter-spacing: 5px;
                font-weight: 700;
            }

            .form_wrap{
                margin-top: 35px;
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

            .form_wrap .input_grp  input[type="text"]{
                width: 165px;
            }

            .form_wrap .input_grp  input[type="number"]{
                width: 165px;
            }

            .form_wrap .input_grp input[type="password"]{
                width: 165px;
            }

            .form_wrap  input[type="text"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap  input[type="number"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap input[type="password"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                
                padding: 10px;
                outline: none;
            }

            .form_wrap  input[type="text"]:focus{
                border-color: #ebd0ce;
            }

            .form_wrap  input[type="number"]:focus{
                border-color: #ebd0ce;
            }

            .form_wrap  input[type="password"]:focus{
                border-color: #ebd0ce;
            }

            .form_wrap ul{
                background: #fff;
                padding: 8px 10px;
                border-radius: 3px;
                display: flex;
                justify-content: center;
            }

            .form_wrap ul li:first-child{
                margin-right: 15px;
            }

            .form_wrap ul .radio_wrap{
                position: relative;
                margin-bottom: 0;
            }

            .form_wrap ul .radio_wrap .input_radio{
                position: absolute;
                top: 0;
                right: 0;
                opacity: 0;
            }

            .form_wrap ul .radio_wrap span{
                display: inline-block;
                font-size: 14px;
                padding: 3px 20px;
                border-radius: 3px;
                color: #545871;
            }

            .form_wrap .input_radio:checked ~ span{
                background: #ebd0ce;
            }

            .form_wrap .terms{
                font-size: small;
                text-align: center;
                font-size: 15px;
                margin-bottom: 10px;
                margin-top: 10px;
                color: #9597a6;
            }

            .form_wrap .terms:a{
                columns: #000000;
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

            .signin{
                color: #fff;
                text-align: center;
                position: relative;
                top: 360px;
                right: 400px;
                font-weight: bolder;
            }

            a{
                color: #ffd5d2;
            }
        </style>
    </head>
    <body>

        <h1>Student Association Bank</h1>
        <hr/>
        <h3>Never provide your identity proof to anyone without any genuine reason</h3>
        <br>
        
        <div class="wrapper">
            <div class="registration_form" id="register">
                <div class="title">
                    Registration Form
                </div>

                <Form action="" method="post">
                    <div class="form_wrap">
                        <div class="input_grp">
                            <div class="input_wrap">
                                <label for="fname">First Name</label>
                                <input type="text" id="fname" name="fname" placeholder="First-Name" required>
                            </div>
                            <div class="input_wrap">
                                <label for="lname">Last Name</label>
                                <input type="text" id="lname" name="lname" placeholder="Last-Name" required>
                            </div>
                        </div>

                        <div class="input_wrap">
                            <label for="email">Email Address</label>
                            <input type="text" id="email" name="email" placeholder="qwerty@gmail.com" required>
                        </div>

                        <div class="input_wrap">
                            <label>Gender</label>
                            <ul>
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="gender" value="M" class="input_radio" checked>
                                        <span>Male</span>
                                    </label>
                                </li>
                                <li>
                                    <label class="radio_wrap">
                                        <input type="radio" name="gender" value="F" class="input_radio">
                                        <span>Female</span>
                                    </label>
                                </li>
                            </ul>
                        </div>

                        <div class="input_wrap">
                            <label for="aadhar">Aadhar Card Number</label>
                            <input type="number" id="aadhar" name="aadhaar" placeholder="Aadhar-ID" required>
                        </div>

                        <div class="input_wrap">
                            <label for="pan">Pan Card Number</label>
                            <input type="text" id="pan" name="pan" placeholder="Pan-ID" required>
                        </div>

                        <div class="input_wrap">
                            <label for="addresss">Address</label>
                            <input type="text" id="addresss" name="addresss" placeholder="Address" required>
                        </div>

                        <div class="input_wrap">
                            <label for="password">Password</label>
                            <input type="password" id="pswd" name="pswd" placeholder="Pin-Code" required>
                        </div>

                        <div class="terms">
                            <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                        </div>

                        <div class="input_wrap">
                            <input type="submit" value="Register" name="submit" class="submit_btn"> 
                        </div>
                    </div>
                </Form>
            </div>

            <br><br><br>

            <div class="signin">
                <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>

        </div>
    </body>
</html>