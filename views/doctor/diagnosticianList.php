<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/profileHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diagnostician List</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            margin:0;
            color:black;
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
        <h2>Diagnostician List</h2>
        <table>
            <form method="POST" action="#">
                <tr>
                    <td> <input name="search" type="text" id="search"> </td>
                    <td><input name="submit" type="submit" value="Search"></td>
                </tr>
            </form>
        </table>
        <a href="./index.php" style="text-decoration:none;border:1px solid black;">Back</a>
    </center>
    <ol>
        <li><a href="./diagnosticianProfile.php"><?php echo $row['name'];?></a></li>
    
    </ol>
    
</body>
<footer>
    
</footer>
</html>