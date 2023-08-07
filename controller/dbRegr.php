<?php
 $sql= "INSERT INTO user (id,name,email,user_name,password,gender,address,dob,role) VALUES (?, ?, ?, ?, ?, ?, ?,?,?)";
            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("issssssss", $id,$name,$email,$user_name,$password,$gender,$address,$date,$role);

	        $response = $stmt->execute();
 ?>