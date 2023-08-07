<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/prescriptionHeader.php';

if(isset($_POST['text']))
{
header('Content-disposition: attachment; filename=Prescription.txt');
header('Content-type: application/txt');
echo $_POST['text'];
exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>
<style>


</style>
</head>
<body>
<button><a style="text-decoration: none;color: black;" href="./patientProfile.php">Back</a></button>


        <table>
          <form method="POST" action="">
          <tr>
            <td><label for="date ">Date : </label></td>
            <td><input name="date" type="date" id="date"></td>
          </tr>
          <tr>
              <td> <label for="prescribe ">Prescribe now : </label> </td>
              <td><input name="prescribe" type="text" id="prescribe"></td>
          </tr>
          <tr>
              <td></td>
              <td><input name="submit" type="submit"></td>
          </tr>
          </form>
        </table>

    
</body>
</html>