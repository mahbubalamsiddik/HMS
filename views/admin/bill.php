<?php
    session_start();
    if (count($_SESSION)===0)
    {
      header("location:adminLogout.php");
    }
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hospital Bill</title>
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



    <br>
    <form>
      <h2>Salary Page</h2>
      <fieldset>
    <center><legend><h1>Employee Salary Chart</h1></legend></center>
    <br>
    <?php
    include "../../controller/databaseConnect.php";
    include "../../controller/dbbillHistory.php";

    
    
  
    
    ?>
    <?php
       echo"<center>";
        echo "<table border='1'>";
        echo"<thead>";
        echo"<tr>";
        echo"<th>";
     
        echo"Id";
        echo"</th>";
        echo"<th>";
        echo"Name";
        echo"</th>";
        echo"<th>";
        echo"Role";
        echo"</th>";
        echo"<th>";
        echo"Salary";
        
        echo"</tr>";
    
     
        echo"</thead>";
        echo" <tbody>";
 
  
        
           foreach($result as $data) {
           echo "<tr>";
           echo "<td>";
           echo $data['id'];
           echo "</td>";
           echo "<td>";
           echo $data['name'];
           echo "</td>";
           echo "<td>";
           echo $data['role'];
           echo "</td>";
           echo "<td>";
           echo $data['salary'];
           echo "</td>";
           echo "</tr>";
    
           }
   
       echo" </tbody>";
       echo" </table>";
       echo"</center>";
 
   
    ?>
  </fieldset>
</form>

 
</body>
<?php
       include "footer.php";
    ?>
</html>