<?php
if (isset($_POST['submit'])) {
    $did = $_POST['doctor_id'];
    $date = $_POST['date'];
    $pid = $_POST['pid'];

    $query = "INSERT INTO doc_appointment (`patient_id`, `doctor_id`, `date`) VALUES ('$pid','$did','$date')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: ../views/patientProfile.php?id=$pid&m=Appointment successful");
        exit;
    }
}

?>