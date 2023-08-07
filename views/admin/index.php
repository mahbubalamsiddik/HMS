<?php
  session_start();
   if (count($_SESSION)===0)
   {
     header("Location:adminLogout.php");
   }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <link rel="stylesheet"type="text/css"href="css/bgform.css">  
    
    <style>
        body{
          background-image: url(../../model/bg.jpg);
           /*background-image: linear-gradient(#6f67f7, #5d7dcd, #2d85d0);*/
           height:100vh;
            margin: auto;          
            font-family: "consolas";
            color: #ccc;
          background-size: cover;
          background-blend-mode: darken;
          background-color: rgba(0,0,0,0.5);
        }

        ul {
          display: inline;
          background-color: rgba(0,0,0,0.1);
          border-radius: 20px;
          padding: 30px;
          margin-left: 20vw;
          margin-bottom:100px;
        }

        li {
          display: inline;
          margin-left: 20px;
          width:100vw;
         
        }

        a {
          color: #ccc;
          font-weight: bold;
          text-decoration: none;
          font-family: "consolas";
        }

        h2{
          margin: 10vh;
        }
        
      .head{
          margin-top:10vh;
        }


    </style>          

  </head>
</head>
<?php
       include "header.php";
    ?>
<body>
<center> <h2>Home Page:</h2> </center>
<div id="nav-menu">
  <br>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="adminProfile.php">Profile</a></li>
    <li><a href="viewEmployeeList.php">View Employee List</a></li>
    <li><a href="makeNotice.php">Make Notice</a></li>
    <li><a href="viewnotice.php">View Notice</a></li>
    <li><a href="bill.php">View Salary info</a></li>
    <li><a href="hospitalAccount.php">Hospital Accounts</a></li>
    <li><a href="report.php">View Report</a></li>
    <li><a href="/HMS/views/logout.php">Logout</a></li>
  </ul>
 </div>




   <center><h3 class='head'><br> Welcome </h3></center>
   <?php
   echo "<center>";
   echo "<p>";
   echo "<h3>";
   //echo $_SESSION['user_name'] ;
   echo "</h3>";
   echo"</p>";
   echo "</center>";
   

   ?>
</body>
<?php
       include "footer.php";
    ?>
</html>