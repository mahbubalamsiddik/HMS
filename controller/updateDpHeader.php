<?php

    $uid = $_SESSION['userId'];

    if (isset($_POST['submit'])){
        $imageName = $_FILES['userDp']['name'];
        $tmpName = $_FILES['userDp']['tmp_name'];

        $uploc = '../model/user dp/' .$imageName;

        $query = "UPDATE user SET `image` = '$imageName' WHERE id = $uid";

        if(mysqli_query($conn, $query)==TRUE){
            move_uploaded_file($tmpName,$uploc);
            echo "Profile picture uploaded";
            
        }
        else{
            echo "File not uploaded!!";
        }
    }



?>