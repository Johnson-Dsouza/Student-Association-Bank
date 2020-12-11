<?php

include('session.php');

if(isset($_POST['submit'])){
    // $password = $_POST['password'];

    $query = mysqli_query($db, "SELECT * FROM passbook WHERE account_no = '".$_SESSION["account_no"]."'");
    $result = mysqli_fetch_array($query);

    if($result > 0){

        // echo $result['balance'];

        if($result['balance'] >= 1000){
            echo '<script>alert("Balance: " + "'.$result['balance'].'" + " rs/-");</script>';
        }
        else{
            echo '<script>alert("Please Maintain Your Balance \nBalance: " +  "'.$result['balance'].'" + " rs/-");</script>';
        }
    }
    else{
        echo '<script>alert("Invalid Password");</script>';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Balance Details Page</title>
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

            .form_wrap .input_grp  input[type="password"]{
                width: 165px;
            }

            .form_wrap  input[type="password"]{
                width: 100%;
                border-radius: 3px;
                border: 1px solid #9597a6;
                padding: 10px;
                outline: none;
            }

            .form_wrap  input[type="password"]:focus{
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

            .contained{
                padding: 6px 18px;
            }
        
        </style>
    </head>
    <body>
        <h1>Student Association Bank</h1>
        <hr/>
        <h3>Avoid accessing Internet banking accounts from cyber cafes or shared PCs</h3>


        
        <div class="contained">
            <a href="functionality.php" class="previous">&laquo;Back</a>
        </div>
        

        <div class="wrapper">
            <div class="login_form">
                <div class="title">
                    Balance Enquiry
                </div>

                <form action="" method="POST">
                    <div class="form_wrap">
                        <div class="inp_grp">

                            <div class="input_wrap">
                                <label for="Account">Account Number:</label>
                                <input type="text" value="<?php echo $login_session; ?>">
                            </div>

                            <!-- <div class="input_wrap">
                                <label for="amount">Enter Password:</label>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div> -->

                            <div class="input_wrap">
                                <input type="submit" name="submit" value="Display Balance" class="submit_btn">
                            </div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>