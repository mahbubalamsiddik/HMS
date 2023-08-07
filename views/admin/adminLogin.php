

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <title>Admin Login </title>
	<style>
       
	   body{
		background-image: url(../../model/bg.jpg);
		  /*background-image: linear-gradient(#6f67f7, #5d7dcd, #2d85d0);*/
		  height:100vh;
		   margin: auto;          
		   font-family: "consolas";
		   color: #ccc;
		 background-size: cover;
		 background-blend-mode: darken;
		 background-color: rgba(0,0,0,0.5);
	   }

	   ul {
		 display: inline;
		 background-color: rgba(0,0,0,0.1);
		 border-radius: 20px;
		 padding: 30px;
		 margin-left: 20vw;
		 margin-bottom:100px;
	   }

	   li {
		 display: inline;
		 margin-left: 20px;
		 width:100vw;
		
	   }

	   a {
		 color: #ccc;
		 font-weight: bold;
		 text-decoration: none;
		 font-family: "consolas";
	   }

   </style>
</head>
<?php
       include "header.php";
    ?>

<body>
  
	
 	<center><form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']) ?>" method="POST"name="loginform"onsubmit="return isValid()">
 		 <fieldset>
 		 	<legend><h2>Login Form</h2></legend>
		UserName: <input type="text" name="user_name"placeholder="Username"value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>"><span id="usernamejs" style="color: red;"></span>
		<br><br>
		Password: <input type="password" name="password"placeholder="Password"value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"><span id="passwordjs" style="color: red;"></span>
		<br><br>
		<input type="checkbox" name="remember" value="remember"> &nbsp; Remeber Me<br>
		<input type="submit" name="login" value="Login"><br>
		
		

	    
		 </fieldset>
	</form></center>
	<?php
	include "../../controller/adminLoginAction.php";
	?>
	<br><br>
	<center><h3>Not registered yet? <a href="adminRegistration.php"> Click here </a> for registration.</h3></center>
	






   


	

</body>
<?php
       include "footer.php";
    ?>
</html>