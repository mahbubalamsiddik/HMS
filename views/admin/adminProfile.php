
<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:/HMS/views/logout.php");
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Admin Profile </title>
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

   </style>

</head>
<?php
       include "header.php";
    ?>
<body>

    <form method="POST">
    <h2>Profile Page:</h2>
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
    <li><a href="adminLogout.php">Logout</a></li>
  </ul>
 </div>



    <br><br>
    <br><br>
    <h2>Profile of <?php echo $_SESSION['user_name'] ?></h2> 
    <br>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>ID:&nbsp &nbsp <?php echo $_SESSION['id'] ?></p>
         <p><b>Name:&nbsp &nbsp <?php echo  $_SESSION['name'] ?> </p>
         <p><b>Email:&nbsp &nbsp<?php echo $_SESSION['email'] ?></b></p>
          <p><b>Gender:&nbsp &nbsp <?php echo    $_SESSION['gender'] ?></b></p> 
         <p><b>Date of Birth:&nbsp &nbsp<?php echo $_SESSION['dateOfBirth'] ?></b></p>
        

         


        </fieldset>  
        
         <br>

      


    </form>   
   
</body>
<?php
       include "footer.php";
    ?>
</html>