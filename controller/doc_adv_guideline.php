<?php
$pid = $_GET['id'];
$query = "SELECT * FROM patient_guideline WHERE patient_id=$pid";
$guideline = mysqli_query($conn, $query);
?>