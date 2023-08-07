<?php
$pid = $_GET['id'];
$query = "SELECT * FROM prescription WHERE patient_id = $pid";
$prescription = mysqli_query($conn, $query);
?>