<?php
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $mobile = $_POST['mobile'];
        $address = $_POST['address'];
        $pid = $_GET['id'];



        $query = "UPDATE patient SET `name` = '$name',`age`= '$age',`mobile`=$mobile,`address` = '$address' WHERE id = $pid";

        mysqli_query($conn, $query);
    }

?>