<?php
    include('session.php');
    
    if($_SESSION['account_no']){
        $account_no = $_SESSION['account_no'];
    }
    else{
        header("location:functionality.php");
    }

    if (isset($_POST['submit'])) {
        $amount = $_POST['amount'];

        $query = mysqli_query($db, "SELECT * FROM passbook WHERE account_no = '".$_SESSION["account_no"]."'");
        $result = mysqli_fetch_array($query);

        $query1 = "UPDATE passbook SET balance = balance + $amount WHERE account_no = '".$_SESSION["account_no"]."'";

        if (mysqli_query($db, $query1)) {
            echo '<script>alert("Deposite Successful");</script>';
        } 
        else {
            echo '<script>alert("You do not have sufficient balance");</script>';
        }
    }
    
    $query5 = mysqli_query($db, "SELECT * FROM registration WHERE account_no = '".$_SESSION["account_no"]."'");
    $result5 = mysqli_fetch_array($query5);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Deposite Page</title>
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
                margin: 0;
                padding: 0;
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

            h4{
                text-align: center;
            }

            .container{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                padding: 200px;
                width: 1000px;
                
            }

            .btn{
                background: #ebd0ce;
                padding: 15px 25px;
                margin: 5px;
                border-radius: 3px;
                text-transform: uppercase;
                cursor: pointer;
                letter-spacing: 2px;
                width: 40%;
            }

            .btn:hover{
                background: #fff;
            }

            i{
                color: #ffff;
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

            .form_wrap .input_grp  input[type="text"]{
                width: 165px;
            }

            .form_wrap  input[type="text"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap  input[type="text"]:focus{
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

            .accountnumber{
                position: relative;
                left: 550px;
                font-weight: bold;
                color: white;
            }
            .accountname{
                position: relative;
                left: 900px;
                font-weight: bold;
                color: white;
            }  
            i{
                color: goldenrod;
            }

            a{
                position: relative;
                left: 50px;
            }
        
        </style>
    </head>
    <body>
        <h1>Student Association Bank</h1>
        <hr/>
        <h3>Access your bank website only by typing the URL in address bar of browser</h3>

        <br><br>

        <a href="functionality.php" class="previous">&laquo;Back</a>
        
        <span class="accountnumber">Welcome Account Number: <i><?php echo $login_session; ?></i></span>

        <span class="accountname">Account Holder Name: <i><?php echo $result5['fname']; ?></i></span>
        

        <div class="wrapper">
            <div class="login_form">
                <div class="title">
                    Deposite Form
                </div>

                <form action="" method="POST">
                    <div class="form_wrap">
                        <div class="inp_grp">

                            <div class="input_wrap">
                                <label for="Account">Account Number:</label>
                                <input type="text" value="<?php echo $login_session; ?>" name="account_no" id="account_no">
                            </div>
                            
                            <div class="input_wrap">
                                <label for="amount">Amount:</label>
                                <input type="number" id="amount" name="amount" placeholder="Amount" required>
                            </div>

                            <div class="input_wrap">
                                <input type="submit" name="submit" value="Deposite" class="submit_btn">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>