<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/diagnostician_app_header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Diagnostician appointment</title>
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
        .diagApp{
            width:300px;
            height:200px;
            background-color:#00B0D6;
            margin-top:100px;
            padding-top:20px;
            color:white;
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
            <div class="diagApp">
                <h2>Diagnostician Appointment</h2>
                <table>
                    <form method="POST" action="">
                    <tr>
                        <td><label for="diag">Input Diagnostician ID : </label></td>
                        <td><input type="text" name="diag_id" id="diag"></td>
                    </tr>
                    
                    <tr>
                        <td><label for="date">Select Date : </label></td>
                        <td><input type="date" name="date" id="date"></td>
                    </tr>
                    <input type="hidden" name="pid" value="<?php echo $_GET['id'] ?>">
                    <tr>
                        <td><a href="staff/index.php" style="text-decoration:none;border:1px solid white;padding:5px;border-radius:5px;color:white;">Back</a></td>
                        <td><input name="submit" type="submit"></td>
                    </tr>
                    </form>
                </table>
                
            </div>
            
        </center>
        
    </body>
    <footer>
        <div class="footer">
        <p>&copy; All right reserved Doctor's Arena</p>
        </div>
    </footer>
</html>