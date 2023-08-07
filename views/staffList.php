<?php
session_start();
include_once '../controller/db.php';
include_once '../controller/sessionCheck.php';
include_once '../controller/staffListHeader.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Staff List</title>
    <style>
        body{
            margin:0;
            font-family:arial;
        }
        #heading{
            padding:10px 0;
            background-color:#00B0D6;
            margin:0;
            color:white;
            text-transform:uppercase;
            font-size:50px;
        }
        .footer{
            margin-top:281px;
            height:30px;
            background-color:#5B6D7B;
            
        }
        .footer>p{
            text-align:center;
            color:white;
        }
    </style>
</head>
<body>
    <center>
        <h1 id="heading">Doctor's Arena</h1>
        <h2>Staff List</h2>
        <table>
            <form method="POST" id="searchform" action="#">
                <tr>
                    <td> <input name="search" type="text" id="search"> </td>
                    <td><input name="submit" type="submit" value="Search by ID"></td>
                </tr>
            </form>
        </table>
        <a href="staff/index.php" style="text-decoration:none;border:1px solid black;">Back</a> <br>
        <table id="table">
            <tr>
                <th>Name</th>
                <th>ID</th>
            </tr>
            <?php while ($row = mysqli_fetch_array($result)) : ?>
                <tr>  
                
                
                    <td>
                    <a href="./userProfile.php?id=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a> 
                    </td>
                    <td>
                    <a href="./userProfile.php?id=<?php echo $row['id'] ?>"><?php echo $row['id'] ?></a> 
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
        req.open("POST", "./staffList.php");
        req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        req.responseType = "json";
        req.onreadystatechange = () =>
            req.readyState === 4 && handleResponse(req.response);
        req.send(JSON.stringify(data));
    })

    // Append results in document
    function handleResponse(res) {
        const results = document.querySelector("#table")
        results.innerHTML = ""
        if (!res.success)
           console.log(res.m);
        else {
            let tr = document.createElement("tr")
            tr.innerHTML = `<th>Name</th>
                <th>ID</th>`
            results.appendChild(tr);
            tr = document.createElement("tr")
                tr.innerHTML = `
                <td>
                    <a href="./userProfile.php?id=${res.rows['id']}">${res.rows[1]}</a> 
                </td>
                <td>
                    <a href="./userProfile.php?id=${res.rows['id']}">${res.rows[0]}</a> 
                </td>
                `
                results.appendChild(tr);
        }
    }
</script>
    
</body>
<footer>
    <div class="footer">
    <p>&copy; All right reserved Doctor's Arena</p>
    </div>
</footer>
</html>