<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/profileHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
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
       
        <div class="left_sidebar">
            <div class="profile">
                <img src="/HMS/model/user dp/<?php echo (strlen($row['image']) > 0 ? $row['image'] : "defaultDP.png") ?>" alt="Profile icon">
                <p><?php echo $row['name'];?></p>
            </div>
            <div class="side_bar">
                <div><a href="updateProfile.php">Update Profile</a></div>
                <div><a href="changePass.php">Change Password</a></div>
                <div><a href="updatePhoto.php">Update Photo</a></div>
            </div>
        </div>

        <div class="right_side_table">
            <table>
                <tr>
                    <th>User Name:</th>
                    <td><?php echo $row['user_name'];?></th>
                </tr>
                <tr>
                    <th>Full Name:</th>
                    <td><?php echo $row['name'];?></td>
                </tr>
                <tr>
                    <th>Role:</th>
                    <td><?php echo $row['role'];?></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><?php echo $row['email'];?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?php echo $row['gender'];?></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><?php echo $row['address'];?></td>
                </tr>
            </table>
            <div class="nav">
                <a href="staff/index.php" class="button">Back</a>
                <a href="logout.php" class="button">Log out</a>
            </div>
            
        </div>
    </div>
    
    
    
</body>
<footer>
    <div class="footer">
        <div class="container">
            <p>&copy; All right reserved Doctor's Arena</p>
        </div>  
    </div>
</footer>
</html>