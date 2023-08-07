<?php
if(!isset($_SESSION['userId'])) {
    header('location: /HMS/views/login.php?m=Need to login');
    exit;
}

?>