<?php
   $sql = "SELECT * FROM user WHERE user_name = ? and password = ?";
	        $stmt = $connection->prepare($sql);
	        $stmt->bind_param("ss",$user_name, $password);
	        $response = $stmt->execute();
?>