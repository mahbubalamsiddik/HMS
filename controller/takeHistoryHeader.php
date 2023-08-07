<?php
if (isset($_POST['submit'])) {
    $uid = $_SESSION['userId'];
    $pid = $_POST['pid'];
    $history = $_POST['history'];

    $query = "INSERT INTO patient_history (`patient_id`, `staff_id`, `detail`) VALUES ('$pid','$uid','$history')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: ../views/patientProfile.php?id=$pid&m=History Inserted successfully");
        exit;
    }
}

?>