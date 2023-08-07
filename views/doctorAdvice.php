<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/doc_adv_pres_header.php';
include_once '../controller/doc_adv_follow_header.php';
include_once '../controller/doc_adv_guideline.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor Advice</title>
    <style>
        body{
            margin:0;
            background-color:#F1F2F7;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-family:arial;
            font-size:50px;
        }
        table, th, td {
            border: 1px solid black;
                }

        table{
            width:80%;
        }
        .docAdvice{
            margin:20px 0;
        }

        .footer{
            margin-top:197px;
            height:30px;
            background-color:#5B6D7B;
            
        }
        .footer>p{
            text-align:center;
            color:white;
        }
    </style>
</head>
    <body>
        <center>
            <h1 id="heading">Doctor's Arena</h1>
            <br>
            <a href="staff/index.php" style="text-decoration:none;border:1px solid black;">Back</a> <br>
            <br>
            <div class="docAdvice">
                <h2>Prescription</h2>

                <table>
                    <tr>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Detail</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($prescription)) : ?>
                        <tr>  
                        
                        
                            <td>
                            <?php echo $row['doctor_id'] ?> 
                            </td>
                            
                            <td>
                            <?php echo $row['doctor_name'] ?> 
                            </td>

                            <td>
                            <?php echo $row['date'] ?> 
                            </td>

                            <td>
                            <?php echo $row['detail'] ?>  
                            </td>
                    
                        </tr>
                    <?php endwhile; ?>
                </table>

                <br>
                <br>

                <h2>Follow up date</h2>

                <table>
                    <tr>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($follow_up)) : ?>
                        <tr>  
                        
                        
                            <td>
                            <?php echo $row['doctor_id'] ?> 
                            </td>
                            
                            <td>
                            <?php echo $row['doctor_name'] ?> 
                            </td>

                            <td>
                            <?php echo $row['date'] ?> 
                            </td>
                    
                        </tr>
                    <?php endwhile; ?>
                </table>

                <br>
                <br>

                <h2>Guidelines</h2>

                <table>
                    <tr>
                        <th>Doctor ID</th>
                        <th>Doctor Name</th>
                        <th>Date</th>
                        <th>Detail</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_array($guideline)) : ?>
                        <tr>  
                        
                        
                            <td>
                            <?php echo $row['doctor_id'] ?> 
                            </td>
                            
                            <td>
                            <?php echo $row['doctor_name'] ?> 
                            </td>

                            <td>
                            <?php echo $row['date'] ?> 
                            </td>

                            <td>
                            <?php echo $row['detail'] ?>
                            </td>
                    
                        </tr>
                    <?php endwhile; ?>
                </table>
                
                
            </div>
            
        </center>
        
    </body>
    <footer>
        <div class="footer">
        <p>&copy; All right reserved Doctor's Arena</p>
        </div>
    </footer>
</html>