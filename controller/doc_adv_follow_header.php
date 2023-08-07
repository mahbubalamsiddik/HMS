<?php
$pid = $_GET['id'];
$query = "SELECT * FROM follow_up WHERE patient_id = $pid";
$follow_up = mysqli_query($conn, $query);
?>