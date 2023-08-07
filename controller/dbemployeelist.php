<?php
 $sql =$connection->prepare( "SELECT * FROM user");
   
    $sql->execute();
    $result=$sql->get_result();
?>