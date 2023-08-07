<?php
     

	 if($_SERVER['REQUEST_METHOD'] === "POST" and count($_REQUEST)>0)
	 {

		 include"../../controller/databaseConnect.php";
		 

		
		 $user_name=$_POST['user_name'];
		 $password=$_POST['password'];
		 include"../../controller/dbLoginr.php";
		

		 if ($response){
			   $data = $stmt->get_result();

		   if ($data->num_rows > 0) {


			   session_start();
			   
			 
		   
			  
					   
			  foreach($data as $data1)
				  {
				 
			 
			  $_SESSION['id']= $data1['id'];
			  $_SESSION['name']=$data1['name'];
			  $_SESSION['email']= $data1['email'];
			  $_SESSION['user_name']= $data1['user_name'];
			  $_SESSION['gender']=$data1['gender'];
			  $_SESSION['address']=$data1['address'];
			  $_SESSION['dateOfBirth']= $data1['dateOfBirth'];
			 
			  $_SESSION['role']=$data1['role'];

					 if(empty($_POST["remember"])) 
					 {
						 setcookie("user_name","");
						 setcookie("password","");
					 } 
					 else 
					 {
						 setcookie ("user_name",$_POST["user_name"],time() + 86400);
						 setcookie ("password",$_POST["password"],time() + 86400);
					 }

					header("Location:index.php");
				 }   
			   
		 
			}
			  else {
			 echo "Login failed.";
			 echo"<br>";
			 echo "Please fill up the form properly";
			 }
	 

	 
		
		 $connection->close();
	 
		 
	 }	
 }
 ?>
 
 
