<?php
 $sql =$connection->prepare( "SELECT * FROM report");
   
    $sql->execute();
    $result=$sql->get_result();
?>