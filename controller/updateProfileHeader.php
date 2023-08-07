<?php
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $uid = $_SESSION['userId'];



        $query = "UPDATE user SET `name` = '$name',`email`= '$email',`address` = '$address' WHERE id = $uid";

        mysqli_query($conn, $query);
    }

?>