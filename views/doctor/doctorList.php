
<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/profileHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor List</title>
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
        
    </style>
</head>
<body>
    <center>
        <h1 id="heading">Hospital Mamagement System</h1>
        <h2>Doctor List</h2>
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
        <li><a href="./doctorProfile.php"><?php echo $row['name'];?></a></li>
    
    </ol>
    
</body>
<footer>
   
</footer>
</html>