<?php
if (isset($_POST['Register'])) {
    $name = $_POST['Name'];
    $age = $_POST['Age'];
    $gender = $_POST['gender'];
    $dob = $_POST['DoB'];
    $mobile = $_POST['Mobile'];
    $address = $_POST['Address'];


    $query = "INSERT INTO patient (`name`, `age`, `gender`, `dob`,`mobile`,`address`) VALUES ('$name','$age','$gender','$dob','$mobile','$address')";
    $result = mysqli_query($conn, $query);
    header('location: ../index.php');
    exit;
}
?>