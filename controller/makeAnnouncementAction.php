 <?php
   

   if ($_SERVER["REQUEST_METHOD"] == "POST"and count($_REQUEST)>0) {

		  $admin_id=$_POST['admin_id'];
		  $date=$_POST['date'];
		  $title=$_POST['title'];
		  $notice_detail=$_POST['notice_detail'];

	   if (empty($admin_id)||empty( $date)||empty($title)||empty($notice_detail)) 
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
	   


	   function sanitize($data) {
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
	   }
  
   
	   if ($isValid) 
	   {
		  $admin_id=sanitize($admin_id);
		  $date=sanitize($date);
		  $title=sanitize($title);
		  $notice_detail=sanitize($notice_detail);
		   
	   }


   

   
	   if ($isValid) { 

		  include"../../controller/databaseConnect.php";
		  include"../../controller/notice.php";


		   

		   if ($response) {
			   echo "Announced Succssfully";
		   }
		   else {
			   echo "Error while saving";
		   }

		  $connection->close();
	   }
		   
   
		   
   }

   ?>