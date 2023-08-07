<?php
if (isset($_POST['submit'])) {
    $uid = $_SESSION['userId'];
    $query = "SELECT * FROM user WHERE id = $uid";
    $data = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($data);


    $doc_name = $row['name'];

    $pid = $_GET['id'];
    
    $date = $_POST['date'];
    $prescribe = $_POST['prescribe'];
    

    $query = "INSERT INTO prescription (`doctor_id`, `doctor_name`, `patient_id`,`date`,`detail`) VALUES ('$uid','$doc_name','$pid','$date','$prescribe')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: ./patientProfile.php?id=$pid&m=Report submission successful");
        exit;
    }
}



?>