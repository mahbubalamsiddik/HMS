<?php
$query = "SELECT * FROM patient";
$result = mysqli_query($conn, $query);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = json_decode(file_get_contents('php://input'), true);
    $pid = $data['query'];
    $query = "SELECT * FROM patient WHERE id = '$pid'";
    $result = mysqli_query($conn, $query);

    // Return false if no result found
    if (mysqli_num_rows($result) === 0) {
        echo json_encode(array("success" => false, "m" => "No user found with matching query"));
        exit;
    }
    $row = mysqli_fetch_array($result);

    echo json_encode(array("success" => true, "rows" => $row));
    exit;
}
?>