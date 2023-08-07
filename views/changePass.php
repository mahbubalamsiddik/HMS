<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/updateProfileHeader.php';
include_once '../controller/profileHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Password</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        .container{
            width:95%;
            margin:auto;
        }
        .heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
            text-align:center;
        }
        .left_sidebar{
            float:left;
            width:25%;
            text-align:center;
        }
        .left_sidebar>.profile>img{
            border:1px solid white;
            border-radius:50%;
            width:150px;
            height:auto;
        }
        .side_bar>div{
            margin:50px 0;
        }
        .side_bar>div>a{
            text-decoration:none;
            color:white;
            background-color:#00B0D6;
            padding:20px 10px;
            width:cover;
            border-radius:5px;
        }
        .right_side_table{
            overflow:hidden;
            width:70%;
        }
        .footer{
            margin-top:105px;
            height:30px;
            background-color:#5B6D7B;
            text-align:center;
            color:white;
            
        }
        .footer>p{
            
            color:white;
        }
        table{
            margin-top:200px;
        }
        table, td, th {
        border: 1px solid;
        min-width:350px;
        }
        th{
            width: 30%;
            border-collapse: collapse;
        }
        td{
            width:70%;
        }
        .button{
            text-decoration:none;
            padding:10px 10px;
            color:white;
            background-color:#00B0D6;
            border-radius:5px;
        }
        .nav{
            margin-top:20px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div>
        <h1 class="heading">Doctor's Arena</h1>
    </div>
    <div class="container">
       
    <center>

        <div class="right_side_table">
            <form method="POST" action="">
                <table>
                    <tr>
                        <th>Old Password:</th>
                        <td><input name="oldPass" type="text"></td>
                    </tr>

                    <tr>
                        <th>New Password:</th>
                        <td><input name="newPass" type="text"></td>
                    </tr>

                    
                </table>
                
            
            
            <div class="nav">
                <a href="./profile.php" class="button">Back</a>
                <input type="submit" value="Update">
            </div>
        </form>
            
        </div>
    </div>

    </center>
    
    
    
</body>
<footer>
    <div class="footer">
        <div class="container">
            <p>&copy; All right reserved Doctor's Arena</p>
        </div>  
    </div>
</footer>
</html>
