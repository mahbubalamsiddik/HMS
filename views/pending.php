<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Report to Admin</title>
    <style>
        body{
            margin:0;
            background-color:#F1F2F7;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
        }
        .content{
            width:300px;
            height:200px;
            background-color:#00B0D6;
            margin-top:100px;
            padding-top:20px;
            color:white;
        }

        .button{
            text-decoration:none;
            padding:10px 10px;
            color:white;
            background-color:#00B0D6;
            border-radius:5px;
            border:1px solid white;
        }

        .footer{
            margin-top:197px;
            height:30px;
            background-color:#5B6D7B;
            
        }
        .footer>p{
            text-align:center;
            color:white;
        }
    </style>
</head>
    <body>
        <center>
            <h1 id="heading">Doctor's Arena</h1>
            <div class="content">
                <h2>Welcome to your workspace!!</h2>
                <h3>Please wait until an Admin approve your registration</h3>

                <a href="logout.php" class="button">Log out</a>
                
            </div>
            
        </center>
        
    </body>
    <footer>
        <div class="footer">
        <p>&copy; All right reserved Doctor's Arena</p>
        </div>
    </footer>
</html>