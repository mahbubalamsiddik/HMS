<?php
if (isset($_POST['Next'])) {


    $pid = $_GET['id'];
    
    

    $status = $_POST['Next'];
   



    $query = "UPDATE doc_appointment SET `status` = '$status' WHERE patient_id = $pid";

    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: /HMS/views/doctor/viewPatient.php");
        exit;
    }

}
?>