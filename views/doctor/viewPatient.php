<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/viewPatientHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View patient</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            margin:0;
            color:black;
            text-transform:uppercase;
            font-size:50px;
        }
       
    </style>
</head>
<body>
    <center>
        <h1 id="heading">Hospital Management System</h1>
        <h2>View Patient</h2>
    
        <a href="./index.php" style="text-decoration:none;border:1px solid black;">Back</a>
       <br><br>  

       <table id="table">
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <tr>  
                
                
                    <td>
                    <a href="./patientProfile.php?id=<?php echo $row['patient_id'] ?>"><?php echo $row['patient_id'] ?></a> 
                    </td>
                    <td>
                    <a href="./patientProfile.php?id=<?php echo $row['patient_id'] ?>"><?php echo $row['date'] ?></a> 
                    </td>
               
                </tr>
            <?php endwhile; ?>
        </table>
       
    </center>
    
    
    
    
</body>
<footer>
   
</footer>
</html>