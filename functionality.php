
<?php
   include('session.php');

    $query = mysqli_query($db, "SELECT * FROM registration WHERE account_no = '".$_SESSION["account_no"]."'");
    $result = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functionality Page</title>
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

            .btncenter{
                position: relative;
                top: 400px;
                left: 732px;
                background-color: lightslategrey;
                color: white;
                letter-spacing: 2px;
                width: 85px;
                height: 30px;
                text-transform: uppercase;
            }

            .btncenter:hover{
                background: #ebd0ce;
                color: black;
            }

            .accountnumber{
                position: relative;
                left: 100px;
                font-weight: bold;
                color: white;
            }
            .accountname{
                position: relative;
                left: 860px;
                font-weight: bold;
                color: white;
            }  
            
            i{
                color: goldenrod;
            }    

           
        </style>
    </head>
    <body>
        <h1>Student Association Bank</h1>
        <hr/>
        <h3>Never click on any links in any e-mail to access the bank’s site</h3>

        <br><br>

        

        <span class="accountnumber">Welcome Account Number: <i><?php echo $login_session; ?></i></span>

        <span class="accountname">Account Holder Name: <i><?php echo $result['fname']; ?></i></span>
    
        
        <div class="container">
            <button class="btn btn1" onclick="location.href='withdraw.php'"><b>Cash Withdraw</b></button>
            <button class="btn btn2" onclick="location.href='deposite.php'"><b>Deposite</b></button>
            <button class="btn btn1" onclick="location.href='transfer.php'"><b>Transfer</b></button>
            <button class="btn btn1" onclick="location.href='balance.php'"><b>Balance Enquiry</b></button>
            <button class="btn btn2" onclick="location.href='pinchange.php'"><b>Change Pin</b></button>
        </div>

        <br>

        <button type="button" onclick="location.href='logout.php'" class="btncenter">Log Out</button>
        
    </body>
</html>