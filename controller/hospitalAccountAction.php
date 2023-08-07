<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
     <link rel="stylesheet"type="text/css"href="css/menustyle.css">
    <link rel="stylesheet"type="text/css"href="css/bgform.css"> 

    <title>Form Submisiion</title>
</head>

<body>


 <?php 

    $id=$_POST['id'];
    $name=$_POST['name'];
    $role=$_POST['role'];
    $salary=$_POST['salary'];
   
    $submitted=false;
 ?>
 <?php  
        if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

            if (empty($id)||empty($name)||empty($role)||empty($salary)) 
            
            {
                $isValid = false;
                echo "<br>";
                echo "<br>";
                echo"<center>";
                echo"<h2>";
                echo "Please fill up the form properly";
                echo"</center>";
                echo"</h2>";
                echo"<br><br>";
                $submitted=false;
            }
            else {
                $isValid = true;
                echo "<br>";
                echo "<br>";
                echo"<center>";
                echo"<h2>";
                echo "Submitted Successfully";
                echo"</center>";
                echo"</h2>";
                echo"<br><br>";
                
                $submitted=true;
            }
        } 


    ?>

    <?php
        function sanitize($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
    <?php
        if ($isValid) 
        {

            $id=sanitize($id);
            $name=sanitize($name);
            
            $role=sanitize($role);
            $salary=sanitize($salary);
            
        }


    ?>

<?php
		if ($isValid) { 

			include"../controller/databaseConnect.php";
			
		

           include"../controller/accountinfo.php";

	        if ($response) {
		        echo "Data Inserted Succssfully";
	        }
	        else {
		        echo "Error while saving";
	        }

	       $connection->close();

		}
		
	?>	


    
	
    </body>

</html>






    
