<?php
if (isset($_POST['submit'])) {
    $did = $_POST['diag_id'];
    $date = $_POST['date'];
    $pid = $_POST['pid'];

    $query = "INSERT INTO diag_appointment (`patient_id`, `diag_id`, `date`) VALUES ('$pid','$did','$date')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: ../views/patientProfile.php?id=$pid&m=Appointment successful");
        exit;
    }
}

?>