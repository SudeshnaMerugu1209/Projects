<?php
session_start();
echo "<script>alert('Welcome ".$_SESSION['adminusername']."!');</script>"; 
$adminusername = $_SESSION['adminusername'];
$adminpassword = $_SESSION['adminpassword'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Admin Home Page</title>
    <link rel="stylesheet" href="homeadmin.css">
    
</head>

<body>

    <div class="container">
        <div class="welcome"><h1 style="font-size:50px;">WELCOME TO THE HOME PAGE</h1></div>
        <div class="line"><h1 style="font-size:20px;">the portal to unlimited knowledge</h1></div>
    </div>
    <div style="height: 30px;"></div>
    <div>
    <nav class="menu">
        <ul >
        <li class="menubar"><a href="homeadmin.php">Home</a></li>
        <li class="menubar"> <a href="orderadmin.php">View Orders</a></li>
        <li class="menubar"> <a href="fineadmin.php">View Fine</a></li>
        <li class="menubar"> <a href="viewadmin.php">View</a></li>
        <li class="menubar"> <a href="searchadmin.php">Search</a></li>
        <li class="menubar"> <a href="updateadmin.php">Update</a></li>
        <li class="menubar"> <a href="deleteadmin.php">Delete</a></li>
        <li class="logout"> <a href="main.php">Logout</a></li>
        </ul>
         
    </nav>
    </div>
</body>
</html>
