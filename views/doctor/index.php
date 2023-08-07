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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Dashboard</title>
    <style>
.home_page_style{
    text-align: center;
    font-size: x-large;
    
}
.navStyle{
    background-color:#263232;
    color:white;
    border-radius:5px;
}
    </style>
</head>
<body>
    <h1 style="text-align:center;">Doctor Dashboard</h1>
<div class="home_page_style">


    <a style="text-decoration: none;"  href="./profile.php" class="navStyle" >Profile</a>
  <a style="text-decoration: none;" href="./patientList.php" class="navStyle">Patient List</a>
  <a style="text-decoration: none;" href="./viewPatient.php" class="navStyle">View Patient</a>
  <a style="text-decoration: none;" href="./staffList.php" class="navStyle">Staff List</a>
  <a style="text-decoration: none;" href="./doctorList.php" class="navStyle">Doctor List</a>
  <a style="text-decoration: none;" href="./diagnosticianList.php" class="navStyle">Diagnostician List</a>
  <a style="text-decoration: none;" href="./doctorNotice.php" class="navStyle">Update Notice</a>
  <a style="text-decoration: none;" href="/HMS/views/logout.php" class="navStyle">Log out</a>

</div>
<br>
</body>
</html>