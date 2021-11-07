<?php
session_start();
 echo "<script>alert('Welcome User ".$_SESSION['userid']."!');</script>"; 
 $userid = $_SESSION['userid'];
 $password = $_SESSION['password'];
 

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to the Student Home Page</title>
    <link rel="stylesheet" href="homestudent.css">
    
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
        <li class="menubar"><a href="homestudent.php">Home</a></li>
        <li class="menubar"> <a href="orderstudent.php">Order</a></li>
        <li class="menubar"> <a href="finestudent.php">Fine</a></li>
        <li class="menubar"> <a href="viewstudent.php">View</a></li>
        <li class="menubar"> <a href="searchstudent.php">Search</a></li>
        <li class="logout"> <a href="main.php">Logout</a></li>
        </ul>
         
    </nav>
    </div>
</body>
</html>


