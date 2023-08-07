<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $role = $_POST['role'];
        $uid = $_POST['id'];


        $query = "UPDATE user SET `role` = '$role' WHERE id = $uid";

        mysqli_query($conn, $query);
    }

?>