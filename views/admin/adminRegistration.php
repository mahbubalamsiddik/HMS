<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    
    <title>Registration</title>
    <link rel="stylesheet"type="text/css"href="css/bgform.css">
     <script src="js/formRegistration.js"></script> 

   <style>
    form{
            background-color:skyblue;
            height:1100px;
            width:700px;
            text-align: center;

        }
   </style>

</head>
     <?php
       include "header.php";
       
    ?>
<body>
    
    <center><form action="adminRegistrationAction.php" method="POST"name="regform"onsubmit="return isValid()">
     <fieldset>
        <legend><h2>Registration Form</h2></legend>
        <fieldset>
         <center><h2>Basic Information:</h2></center>
         <p><b>Id:&nbsp &nbsp &nbsp</b><input type="text"name="id"placeholder="ID" ></p><span id="idjs"style="color: red;" ></span>

         <p><b>Name: &nbsp &nbsp &nbsp</b><input type="text"name="name"placeholder="Name"></p><span id="Namejs" style="color: red;"></span>
         <p><b>Email:&nbsp &nbsp &nbsp</b><input type="email"name="email"Placeholder="Email"></p><span id="emailjs" style="color: red;"></span>
         <p><b>Username:&nbsp &nbsp &nbsp</b><input type="text"name="user_name"Placeholder="Username"></p><span id="user_namejs" style="color: red;"></span>
         <p><b>Password:&nbsp &nbsp &nbsp</b><input type="password"name="password"Placeholder="Password"></p><span id="passwordjs" style="color: red;"></span>

         <b>Gender: &nbsp &nbsp &nbsp</b><input type="radio"name="gender"value="Male">Male
                       <input type="radio"name="gender"value="Female">Female
                       <input type="radio"name="gender"value="Others">Others
                       <span id="genderjs" style="color: red;"></span>
         
                       <p><b>Address:</b></p> <textarea name="address"></textarea><span id="Addressjs" style="color: red;"></span>
                       <p><b>Date of Birth:&nbsp &nbsp &nbsp</b><input type="date"name="dateOfBirth"Placeholder="Date of Birth"></p><span id="datejs" style="color: red;"></span>
                       <form action="upload.php" method="post" enctype="multipart/form-data">
           
        
         <p><b>Role:&nbsp &nbsp &nbsp</b><input type="text"name="role"Placeholder="Role"></p><span id="rolejs" style="color: red;"></span>
      
         
        <br>
        <button type="submit">Registered</button> 

          </fieldset>
    </form>
    </center>

    <center><p><h3> Already registered? <a href="adminLogin.php"> Click here </a> for login.</h3></p></center>
</body>
    <?php
       include "footer.php";
    ?>
</html>