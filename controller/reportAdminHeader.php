<?php
if (isset($_POST['submit'])) {
    $uid = $_SESSION['userId'];
    $date = $_POST['date'];
    $title = $_POST['title'];
    $report = $_POST['report'];

    $query = "INSERT INTO report (`reporter_id`, `date`, `title`,`report_detail`) VALUES ('$uid','$date','$title','$report')";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location: ../views/reportAdmin.php?m=Report submission successful");
        exit;
    }
}

?>