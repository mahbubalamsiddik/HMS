<?php
session_start();
include_once '../../controller/db.php';
include_once '../../controller/sessionCheck.php';
include_once '../../controller/doctorPatientListHeader.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient List</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            margin:0;
            color:black;
            text-transform:uppercase;
            font-size:50px;
        }
       
    </style>
</head>
<body>
    <center>
        <h1 id="heading">Hospital Management System</h1>
        <h2>Patient List</h2>
        <table>
            <form method="POST" id="searchform" action="#">
                <tr>
                    <td> <input name="search" type="text" id="search"> </td>
                    <td><input name="submit" type="submit" value="Search"></td>
                </tr>
            </form>
        </table>
        <a href="./index.php" style="text-decoration:none;border:1px solid black;">Back</a>
       <br><br>  

       <table id="table">
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <tr>  
                
                
                    <td>
                    <a href="./patientProfile.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a> 
                    </td>
                    <td>
                    <a href="./patientProfile.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a> 
                    </td>
               
                </tr>
            <?php endwhile; ?>
        </table>
       
    </center>
    <script>
    // Handle search request
    document.getElementById("searchform").addEventListener("submit", e => {
        e.preventDefault()
        const query = document.querySelector("#search")
        const data = {
            query: query.value
        }
        query.value = ""
        const req = new XMLHttpRequest();
        req.open("POST", "./patientList.php");
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.responseType = "json";
        req.onreadystatechange = () =>
            req.readyState === 4 && handleResponse(req.response);
        req.send(JSON.stringify(data));
    })

    // Append results in document
    function handleResponse(res) {
        if (!res.success)
           console.log(res.m);
        else {
            const results = document.querySelector("#table")
            results.innerHTML = ""
            let tr = document.createElement("tr")
            tr.innerHTML = `<th>Name</th>
                <th>ID</th>`
            results.appendChild(tr);
            tr = document.createElement("tr")
                tr.innerHTML = `
                <td>
                    <a href="./patientProfile.php?id=${res.rows['id']}">${res.rows[1]}</a> 
                </td>
                <td>
                    <a href="./patientProfile.php?id=${res.rows['id']}">${res.rows[0]}</a> 
                </td>
                `
                results.appendChild(tr);
        }
    }
</script>
    
    
    
</body>
<footer>
   
</footer>
</html>