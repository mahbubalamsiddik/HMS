<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form Submisiion</title>
</head>
<?php
       include "header.php";
    ?>
<body>


 <?php 

    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    //$gender=$_POST['gender'];
    //$date=$_POST['dateOfBirth'];
    
    $address=$_POST['address'];

   
 
    
   
    
    
    $role=$_POST['role'];
    $submitted=false;
 ?>
 <?php  
		if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

			if (empty($id)||empty($name)||empty($email)||empty($user_name)||empty($password)||empty($_POST['gender'])||empty($address)||empty($_POST['dateOfBirth'])||empty($role)) 
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
			
			
			$email=sanitize($email);
            $user_name=sanitize($user_name);
            $password= sanitize($password);
			$address=sanitize($address);
			$role=sanitize($role);
		}


	?>

	<?php
		if ($isValid) { 

			include"../../controller/databaseConnect.php";
			
			$gender=$_POST['gender'];
            $date=$_POST['dateOfBirth'];

           include"../../controller/dbRegr.php";

	        if ($response) {
		        echo "Data Inserted Succssfully";
	        }
	        else {
		        echo "Error while saving";
	        }

	       $connection->close();

		}
		
	?>	
    

	<br><br>

	<center><a href="adminRegistration.php"><h2> Register </h2> </a> | <a href="adminLogin.php" ><h2>Login</h2> </a></center>

	

</body>

<?php
       include "footer.php";
    ?>
</html>






	
