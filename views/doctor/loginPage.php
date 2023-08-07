<?php	
    session_start();
    include_once '../../controller/db.php';
    include_once '../../controller/loginHeader.php';
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <style>
        #heading{
            color:#302953;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
        }
        .signIn_area{
            background-color:#263232;
            width:500px;
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
            <h2 id="heading">Hospital Management System</h2>
            <div class="signIn_area">
                
                <h3 style="color:white;">User Login</h3>
                <table>
                    <form method="POST" action="">
                    <tr>
                        <td> <label for="User_Name ">User Name : </label> </td>
                        <td><input name="User_Name" type="text" id="User_Name" placeholder="User Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password ">Password : </label> </td>
                        <td><input name="Password" type="password" id="Password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input name="submit" type="submit" value="Login"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><a href="./registrationPage.php" style="text-decoration:none;color:white;">Register Now</a></td>
                    </tr>
                    <tr>
                            <td style="color:red;"><?php if (isset($_GET['m'])) echo ($_GET['m']) ?></td>
                        </tr>
                    </form>
                </table>
            </div>
            
        </center>
        
    </body>
</html>