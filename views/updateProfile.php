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
                <img src="../model/user dp/<?php echo $row['image'] ?>" alt="User DP">
                <p><?php echo $row['name'];?></p>
            </div>
            <div class="side_bar">
            </div>
        </div>

        <div class="right_side_table">
            <form method="POST" action="">
                <table>
                    <tr>
                        <th>User Name:</th>
                        <td><?php echo $row['user_name'];?></td>
                    </tr>
                    <tr>
                        <th>Full Name:</th>
                        <td><input name="name" type="text" value="<?php echo $row['name'];?>"></td>
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
                        <td><input name="email" type="email" value="<?php echo $row['email'];?>"></td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td><?php echo $row['gender'];?></td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td><input name="address" type="text" value="<?php echo $row['address'];?>"></td>
                    </tr>
                </table>
                
            
            
            <div class="nav">
                <a href="./profile.php" class="button">Back</a>
                <input type="submit" value="Update">
            </div>
        </form>
            
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
