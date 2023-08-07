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
<title>Hospital Account </title>
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



 
    <form action="../../controller/hospitalAccountAction.php"method="POST">
     <fieldset>

        <legend><h1>Account Information</h1></legend>
        <fieldset>
         <p><b>Id:&nbsp &nbsp &nbsp</b><input type="text"name="id"placeholder="Id"></p>
         <p><b>Name: &nbsp &nbsp &nbsp</b><input type="text"name="name"placeholder="Name"></p>
         
         <p><b>Role:&nbsp &nbsp &nbsp</b><input type="text"name="role"Placeholder="Role"></p>
         <p><b>Salary:&nbsp &nbsp &nbsp</b><input type="text"name="salary"Placeholder="Salary"></p>
         

        </fieldset>  
        
        
        <br>
        <button type="submit">Save</button> 

          </fieldset>
    </form>   
   
</body>
    <?php
       include "footer.php";
    ?>
</html>