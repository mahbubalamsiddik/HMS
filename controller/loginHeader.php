<?php

function redirect($role) {
    switch ($role) {
        case 'admin':
            header('location: ./admin/index.php');
            break;
            
        case 'staff':
            header('location: ./staff/index.php');
            break;
        
        case 'doctor':
            header('location: ./doctor/index.php');
            break;
        
        case 'diagnostician':
            header('location: ./diagnostician/index.php');
            break;

        default:
            header('location: pending.php');
            break;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['User_Name'];
    $password = $_POST['Password'];
    $query = "SELECT * FROM user WHERE `user_name` = '$username' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 0) {
        header('location: ./login.php?m=No username found');
        exit;
    }

    $row = mysqli_fetch_array($result);
    if (password_verify($password, $row['password'])) {
        $_SESSION['userId'] = $row['id'];
        $_SESSION['role'] = $row['role'];
        redirect($_SESSION['role']);
        
       exit;
    } else
        header('location: ../views/login.php?m=Incorrect password');
}

if(isset($_SESSION['userId'])) {
    
    redirect($_SESSION['role']);
    exit;
}
?>