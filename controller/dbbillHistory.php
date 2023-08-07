<?php
 $sql =$connection->prepare( "SELECT * FROM accountinfo");
   
    $sql->execute();
    $result=$sql->get_result();
?>