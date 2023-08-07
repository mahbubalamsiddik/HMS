<?php
 $sql= "INSERT INTO accountinfo (id,name,role,salary) VALUES (?, ?, ?, ?)";
            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("isss", $id,$name,$role,$salary);

	        $response = $stmt->execute();
 ?>