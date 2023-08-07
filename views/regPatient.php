
<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/regPatientHeader.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
        .form{
            background-color:#00B0D6;
            width:300px;
            height:320px;
            margin:10px 0;
            padding:20px 20px;
            color:white;
        }
        .heading{
            font-size:50px;
            color:#302953;
            text-transform:uppercase;
            font-family:arial;
        }
        .signIn{
            text-decoration:none;
            border:1px solid black;
        }
        body{
            background-image:url("../model/regPatient.jpg");
            background-repeat: no-repeat;
            background-size:cover;
        }
        table{
            margin-bottom:20px;
        }
        #back{
            text-decoration:none;
            border:1px solid white;
            padding:5px;
            border-radius:5px;
            color:white;
            background-color:#00B0D6;
        }
        
</style>
</head>
<body>
    <center>
        <h1 class="heading">Doctor's Arena</h1>
        <div class="form">
            <table>                
                <h2>Register New Patient</h2>
                <form method="POST" action="">
                    <tr>
                        <td> <label for="Name ">Name : </label> </td>
                        <td><input name="Name" type="text" id="Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Age ">Age : </label> </td>
                        <td><input name="Age" type="text" id="Age"></td>
                    </tr>
                    <tr>
                        <td> <label>Gender : </label> </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="DoB ">Date of Birth : </label> </td>
                        <td><input name="DoB" type="date" id="DoB"></td>
                    </tr>
                    <tr>
                        <td> <label for="Mobile ">Mobile : </label> </td>
                        <td><input name="Mobile" type="text" id="Mobile"></td>
                    </tr>
                    <tr>
                        <td> <label for="Address ">Address : </label> </td>
                        <td><input name="Address" type="text" id="Address"></td>
                    </tr>
                    
                    
                    <tr>
                        <td><input type="reset" name="Reset"></td>
                        <td> <input type="submit" name="Register" value="Register"></td>
                    </tr>
                </form>
            </table>
            <a href="../views/staff/index.php" id="back">Back</a>
        </div>
    </center>
   
</body>
</html>