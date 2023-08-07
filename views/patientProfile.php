<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
$pid = $_GET['id'];

//
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
}

$query = "SELECT * FROM patient WHERE id = $pid";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Profile</title>

    <style>
        body{
            margin:0;
            background-color:#F1F2F7;
            font-family:arial;
        }

        .heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            margin-bottom:50px;
            color:white;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
            text-align:center;
        }

        .top_table{
            width:55%;
            margin-bottom:50px;
        }
        .button{
            text-decoration:none;
            padding:10px 10px;
            color:white;
            background-color:#00B0D6;
            border-radius:5px;
        }
        .menu{
            
        }

        table{
            
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


        .flex-box{
            display:flex;
            flex-wrap:wrap;
            justify-content: center;
            
            
        }

        .flex-box>div{
            margin:50px 80px;
            flex-basis:250px;
            font-family:arial;           
            
        }
        .flex-box>div>a{
            margin:10px;
            padding:30px 10px;
            border:1px solid white;
            background-color:white;
            color:#302953;
            border-radius:8px;
            text-decoration:none;
        }
        .flex-box>div>a:hover{
            box-shadow: rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px;
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
    </style>
</head>
<body>
    <div>
        <h1 class="heading">Doctor's Arena</h1>
    </div>

    <center>

    <div class="top_table">
        <table>
            <tr>
                <th>ID:</th>
                <td><?php echo $row['id'];?></th>
            </tr>
            <tr>
                <th>Name:</th>
                <td><?php echo $row['name'];?></td>
            </tr>
            <tr>
                <th>Age:</th>
                <td><?php echo $row['age'];?></td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td><?php echo $row['gender'];?></td>
            </tr>
            <tr>
                <th>Birth date:</th>
                <td><?php echo $row['dob'];?></td>
            </tr>
            <tr>
                <th>Mobile:</th>
                <td><?php echo $row['mobile'];?></td>
            </tr>
            <tr>
                <th>Address:</th>
                <td><?php echo $row['address'];?></td>
            </tr>
            <tr>
                <th>Status:</th>
                <td><?php echo $row['status'];?></td>
            </tr>
        </table>
        <div class="nav">
            <a href="staff/index.php" class="button">Home</a>
            <a href="patientProfileEdit.php?id=<?php echo $pid ?>" class="button">Edit info</a>
        </div>

        <p style="background-color:green;"><?php if (isset($_GET['m'])) echo ($_GET['m']) ?></p>
            
    </div>

    <div class="right_side">
        <div class="flex-box">
            <div><a href="/HMS/views/doctor_app.php?id=<?php echo $pid ?>">Doctor Appointment</a></div>
            <div><a href="/HMS/views/diagnostician_app.php?id=<?php echo $pid ?>">Diagnostician Appointment</a></div>
            <div><a href="/HMS/views/doctorAdvice.php?id=<?php echo $pid ?>">Doctor Advice</a></div>
            <div><a href="/HMS/views/take_history.php?id=<?php echo $pid ?>">Take History</a></div>
            <div><a href="/HMS/views/billing.php?id=<?php echo $pid ?>">Admit Patient</a></div>
            <div><a href="/HMS/views/billing.php?id=<?php echo $pid ?>">Release Patient</a></div>
            <div><a href="/HMS/views/billing.php?id=<?php echo $pid ?>">Make Bill</a></div>
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