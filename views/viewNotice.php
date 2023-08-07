<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/viewNoticeHeader.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Notice</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-size:50px;
        }
        .footer{
            margin-top:281px;
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
        <h2>All Notice</h2>
        <a href="staff/index.php" style="text-decoration:none;border:1px solid black;">Back</a> <br>
        <table id="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Title</th>
                <th>Details</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <tr>  
                
                
                    <td>
                    <?php echo $row['admin_id'] ?> 
                    </td>

                    <td>
                        
                    </td>

                    <td>
                    <?php echo $row['date'] ?> 
                    </td>

                    <td>
                    <?php echo $row['title'] ?>  
                    </td>

                    <td>
                    <?php echo $row['notice_detail'] ?>  
                    </td>
               
                </tr>
            <?php endwhile; ?>
        </table>
    </center>
    
    
</body>
<footer>
    <div class="footer">
    <p>&copy; All right reserved Doctor's Arena</p>
    </div>
</footer>
</html>