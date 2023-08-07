<?php
 $sql =$connection->prepare( "SELECT * FROM notice");
   
    $sql->execute();
    $result=$sql->get_result();
?>