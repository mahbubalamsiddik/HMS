<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/doctorProfileHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor Profile</title>
    <style>
    
        .heading{
            padding:10px 0;
           
            margin:0;
            color:black;
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
            color:black;
            padding:20px 10px;
            width:cover;
            border-radius:5px;
        }
        .right_side_table{
            overflow:hidden;
            width:70%;
        }
    
      
        
        .button{
            text-decoration:none;
            padding:10px 10px;
            color:white;
            background-color:black;
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
        <h1 class="heading">Doctor Profile</h1>
    </div>
    <div class="container">
       
        <div class="left_sidebar">
            <div class="profile">
                <img src="../../model/user dp/<?php echo $row['image'] ?>" alt="">
                <p><?php echo $row['name'];?></p>
            </div>
            <div class="side_bar">
                <div><a href="./updatePhoto.php">Update Photo</a></div>
            </div>
        </div>

        <div class="right_side_table">
            
                
                    <h4>User Name: <?php echo $row['user_name'];?></h4>
                    <br>
                    <h4>Full Name: <?php echo $row['name'];?></h4>
                    <br>
                    <h4>Role: Doctor</h4><br>
                    <h4>Phone: <?php echo $row['phone'];?></h4><br>
                    <h4>Email: <?php echo $row['email'];?></h4><br>
                    <h4>Gender:<?php echo $row['gender'];?></h4><br>
                    <h4>Address: <?php echo $row['address'];?></h4>
    
            <div class="nav">
                <a href="./index.php" class="button">Back</a>
                <a href="./logOut.php" class="button">Log out</a>
            </div>
            
        </div>
    </div>
    
    
    
</body>
<footer>
    
</footer>
</html>