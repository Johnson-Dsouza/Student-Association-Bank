<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home Page</title>
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
        </style>

    </head>
    <body>
       <h1>Student Association Bank</h1>
       <hr/>
       <h3>The Luxury Of Banking Anytime, Anywhere<span style="color: red;">(24*7)</span></h3>
        <h2>SAB ATM</h2>
        <div class="container">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button class="btn" onclick="location.href='login.php'">Login</button>
            <button class="btn" onclick="location.href='register.php'">First Time User</button> 
        </div>
    </body>
</html>