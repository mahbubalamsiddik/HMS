
<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/registrationHeader.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
        body{
            background-image:url("../model/reg.jpg");
            background-size:cover;
            margin:0;
        }
        .form{
            background-color:#00B0D6;
            width:300px;
            height:400px;
            margin:10px 0;
            padding:20px 20px;
            color:white;
        }
        .heading{
            font-size:50px;
            color:#302953;
            text-transform:uppercase;
            font-family:arial;
        }
        .signIn{
            text-decoration:none;
            color:white;
        }

        #errMsg{
            color:red;
        }
        
</style>
</head>
<body>
    <center>
        <h1 class="heading">Doctor's Arena</h1>
        <div class="form">
            <table>
                <h2>Registration</h2>
                <form name="reg_form" method="POST" action="">
                    <tr>
                        <td> <label for="Name ">Name : </label> </td>
                        <td><input name="Name" type="text" id="Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Email ">Email : </label> </td>
                        <td><input name="Email" type="text" id="Email"></td>
                    </tr>
                    <tr>
                        <td> <label for="User_Name ">User Name : </label> </td>
                        <td><input name="User_Name" type="text" id="User_Name"></td>
                    </tr>
                    <tr>
                        <td> <label for="Password ">Password : </label> </td>
                        <td><input name="Password" type="password" id="Password"></td>
                    </tr>
                    <tr>
                        <td> <label for="Confirm_Password ">Confirm Password : </label> </td>
                        <td><input name="Confirm_Password" type="password" id="Confirm_Password"></td>
                    </tr>
                    <tr>
                        <td> <label>Gender : </label> </td>
                        <td>
                            <input type="radio" id="male" name="gender" value="male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female">
                            <label for="female">Female</label>
                            <input type="radio" id="other" name="gender" value="other">
                            <label for="other">Other</label>
                        </td>
                    </tr>
                    <tr>
                        <td> <label for="DoB ">Date of Birth : </label> </td>
                        <td><input name="DoB" type="date" id="DoB"></td>
                    </tr>
                    <tr>
                        <td> <label for="Address ">Address : </label> </td>
                        <td><input name="Address" type="text" id="Address"></td>
                    </tr>
                    <tr>
                        <td><input type="reset" name="Reset"></td>
                        <td> <input type="submit" name="Submit"></td>    
                    </tr>
                    <tr>
                        <td id="errMsg"></td>
                    </tr>
                </form>
            </table>
            <a href="login.php" class="signIn">Already Registered?Sign in</a>
        </div>
    </center>

    <script>
    document.forms['reg_form'].addEventListener("submit", validate)
    
function validate(event) {
        //event.preventDefault()
        const name = document.getElementsByName("Name")[0].value
        const email = document.getElementsByName("Email")[0].value
        const username = document.getElementsByName("User_Name")[0].value
        const password = document.getElementsByName("Password")[0].value
        const confirmPassword = document.getElementsByName("Confirm_Password")[0].value
        //const gender = document.getElementsByName("gender")[0].value
        // const genderM = document.getElementsById(male).value
        // const genderF = document.getElementsById(female).value
        const dob = document.getElementsByName("DoB")[0].value
        const address = document.getElementsByName("Address")[0].value
        const errMsg = document.querySelector("#errMsg")
        
        if (name.length == 0){
            errMsg.textContent = "Name must be filled out"
            event.preventDefault()
        }

        else if (email.length == 0){
            errMsg.textContent = "Email must be filled out"
            event.preventDefault()
        }

        else if (!email.includes('@')) {
            errMsg.textContent = "Invalid email"
            event.preventDefault()
        }

        else if (username.length == 0){
            errMsg.textContent = "Username must be filled out"
            event.preventDefault()
        }

        else if (password.length == 0){
            errMsg.textContent = "Password must be filled out"
            event.preventDefault()
        }

        else if (password.length < 8) {
            errMsg.textContent = "Password length must be 8"
            event.preventDefault()
        }

        else if (confirmPassword.length == 0){
            errMsg.textContent = "Confirm Password must be filled out"
            event.preventDefault()
        }

        else if (password != confirmPassword){
            errMsg.textContent = "Password not matched"
            event.preventDefault()
        }

        // else if (genderM.checked==false && genderF.checked==false){
        //     errMsg.textContent = "Gender must be filled out"
        //     event.preventDefault()
        // }

        // else if (gender.length == 0){
        //     errMsg.textContent = "Gender must be filled out"
        //     event.preventDefault()
        // }

        else if (dob.length == 0){
            errMsg.textContent = "Birthdate must be filled out"
            event.preventDefault()
        }

        else if (address.length == 0){
            errMsg.textContent = "Address must be filled out"
            event.preventDefault()
        }
    }
</script>
   
</body>
</html>