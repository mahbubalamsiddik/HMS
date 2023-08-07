<?php

$sql= "INSERT INTO notice(admin_id,date,title,notice_detail) VALUES (?, ?, ?,?)";
            $stmt = $connection->prepare($sql);
	        $stmt->bind_param("isss", $admin_id, $date,$title,$notice_detail);

	        $response = $stmt->execute();
?>