<?php
    session_start();
    include_once '../../controller/db.php';
    include_once '../../controller/doctorUpdateDpHeader.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Profile Picture</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-size:50px;
        }
        .footer{
            margin-top:281px;
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
        <h1 id="heading">Hosital Management System</h1>
        <h2>Update Profile Picture</h2>
        
            <form method="POST" action="./updatePhoto.php" enctype="multipart/form-data">
                <tr>
                    <p> <input name="userDp" type="file" id="userDp"> </p><br>
                    <p><input name="submit" type="submit" value="Upload"></p>
                </tr>
            </form>
       
        <br>
        <a href="./profile.php" style="text-decoration:none;border:1px solid black;">Back</a>
    </center>
</body>
<footer>
</footer>
</html>