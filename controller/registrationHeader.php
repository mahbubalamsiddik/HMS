<?php
if (isset($_POST['Submit'])) {
    // if (!strpos($_POST['Email'], '@')) {
    //     header('location: ../views/registration.php?m=Invalid Email');
    //     exit;
    // }
    // if (strlen($_POST['Password']) < 8) {
    //     header('location: ../views/registration.php?m=Password too short');
    //     exit;
    // }
    // if ($_POST['Password'] != $_POST['Confirm_Password']) {
    //     header('location: ../views/registration.php?m=Passwords do not match');
    //     exit;
    // }
    $username = $_POST['User_Name'];
    $password = $_POST['Password'];
    $password2 = $_POST['Confirm_Password'];
    $email = $_POST['Email'];
    $name = $_POST['Name'];
    $gender = $_POST['gender'];
    $dob = $_POST['DoB'];
    $address = $_POST['Address'];

    $query = "SELECT * FROM user WHERE `user_name` = '$username' ";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) !== 0) {
        header('location: ../views/registration.php?m=Username already used');
        exit;
    }

    $hashedPw = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (`name`, `email`, `user_name`, `password`,`gender`,`address`,`DoB`) VALUES ('$name','$email','$username','$hashedPw','$gender','$address','$dob')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header('location: ../views/login.php');
        exit;
    } else
        header('location: ../views/registration.php?m=Something went wrong');
        exit;
}

if(isset($_SESSION['userId'])) {
    header('location: ../indexphp');
    exit;
}
?>