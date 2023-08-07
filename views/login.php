<?php	
    session_start();
    include_once '../controller/db.php';
    include_once '../controller/loginHeader.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign In</title>
    <style>
        #heading{
            color:#302953;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
        }
        body{
            background-image:url("../model/Doc.jpg");
            background-size:cover;
            margin:0;
        }
        .signIn_area{
            background-color:#00B0D6;
            width:300px;
            height:180px;
            margin:0;
            margin-top:150px;
            padding:20px 20px;
        }
        label{
            color:white;
        }
    </style>
</head>
    <body>
        <center>
            <h2 id="heading">Doctor's Arena</h2>
            <div class="signIn_area">
                
                <h3 style="color:white;">User Login</h3>
                <table>
                    <form method="POST" action="">
                    <tr>
                        <td> <label for="User_Name ">User Name : </label> </td>
                        <td><input name="User_Name" type="text" id="User_Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password ">Password : </label> </td>
                        <td><input name="Password" type="password" id="Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="submit" type="submit" value="Login"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="registration.php" style="text-decoration:none;color:white;">Register Now!</a></td>
                    </tr>
                    <tr>
                            <td><?php if (isset($_GET['m'])) echo ($_GET['m']) ?></td>
                        </tr>
                    </form>
                </table>
            </div>
            
        </center>
        
    </body>
</html>