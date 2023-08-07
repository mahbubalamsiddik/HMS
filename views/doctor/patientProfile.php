
<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/doctorPatientProfileHeader.php';



$pid = $_GET['id'];
$query = "SELECT * FROM patient WHERE id = $pid";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>

    <style>

.profileStyle{

margin-left: 50px;



}

    </style>
</head>
<body>
    <button><a style="text-decoration: none;color: black;" href="./patientList.php">Back</a></button>
<div class="profileStyle">
    <p style="background-color:green;"><?php if (isset($_GET['m'])) echo ($_GET['m']) ?></p>
    <h2>Patient Name : <?php echo $row['name'];?></h2>
    <h2>Patient Age : <?php echo $row['age'];?></h2>
    <h2>Patient Gender : <?php echo $row['gender'];?></h2>
    <h2>Patient Date of Birth : <?php echo $row['dob'];?></h2>
    <h2>Patient Phone : <?php echo $row['mobile'];?></h2>
    <h2>Patient Address : <?php echo $row['address'];?></h2>
    
</div>
<div class="profileStyle">
    <button> <a href="./prescription.php?id=<?php echo $row['id'] ?>">Prescribe Now</a></button>
    <br><br>
    <button><a href="#">Diagnostic Test Result</a></button>
    <br><br>
    <button> <a href="./followUpSchedule.php">Follow Up Schedule</a> </button>
    <br><br>
    <button><a href="./patientGuidelines.php">Guidelines for Patient</a></button><br><br><br><br>
    <form action="" method="post"><input type="submit" name="Next" value="Next"> <input value="<?php echo $pid ?>" name="pid" type="hidden"></form>
</div>


</body>
</html>