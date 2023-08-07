<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';

$uid = $_SESSION['userId'];
$query = "SELECT * FROM user WHERE `id` = '$uid' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
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
        a{
            text-decoration:none;
            font-color:black;
            margin:2px;
            padding:5px;
            
        }
        .flex-box{
            display:flex;
            flex-wrap:wrap;
            justify-content: center;
            
            
        }

        .flex-box>div{
            margin:50px 100px;
            flex-basis:200px;
            font-family:arial;           
            
        }
        .flex-box>div>a{
            margin:10px;
            padding:30px 10px;
            border:1px solid white;
            background-color:white;
            color:#302953;
            border-radius:8px;
        }
        .flex-box>div>a:hover{
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
        }
        #profile{
            float:left;
        }
        #profile>img{
            width:100px;
            height:auto;
            border-radius:50%;
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
        <h2 id="heading">Doctor's Arena</h2>
        <a id="profile" href="../profile.php"> <img src="../../model/user dp/<?php echo (strlen($row['image']) > 0 ? $row['image'] : "defaultDP.png") ?>" alt="Profile icon"> <br><?php echo $row['name'];?> </a>
        <div class="flex-box">
            <div><a href="/HMS/views/regPatient.php">Register New Patient</a></div>
            <div><a href="/HMS/views/patientList.php">Patient List</a></div>
            <div><a href="/HMS/views/staffList.php">Staff List</a></div>
            <div><a href="/HMS/views/doctorList.php">Doctor List</a></div>
            <div><a href="/HMS/views/diagnosticianList.php">Diagnostician List</a></div>
            <div><a href="/HMS/views/reportAdmin.php">Report to Admin</a></div> 
            <div><a href="/HMS/views/viewNotice.php">View Notice</a></div>  
            
        </div>
    </center>

</body>
<footer>
    <div class="footer">
    <p>&copy; All right reserved Doctor's Arena</p>
    </div>
</footer>
</html>