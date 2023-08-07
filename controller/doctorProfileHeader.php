<?php
$uid = $_SESSION['userId'];
$query = "SELECT * FROM user WHERE `id` = '$uid' ";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>