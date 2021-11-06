<!DOCTYPE html>
<html>
<head>
    <title>Student Login Page</title>
    <link rel="stylesheet" href="loginstudent.css">
    
</head>

<body>
    <div class="container">
    <div><button style="background-color: rgb(107, 80, 45);color: rgb(77, 45, 22);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',sans-serif"><a href="main.php">Back</a></button></div>
        <h1 style="text-align: center;color: antiquewhite;text-indent: 20px;background-color: rgb(77, 45, 22);width: 100%;">Student Login</h1>
        <div class="container1">
    <form method="post" action="loginstudent.php">
        <div class="vertical-center">User ID : <input type="number" name="userst" id="userst" min="200000001" max="200030060"><br><br></div>
       <div class="vertical-center1">Password : <input type="password" name="passst" id="passst" ><br><br></div>
       <div class="vertical-center2"><input style="color: rgb(77, 45, 22);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;background-color:rgb(172, 145, 126) ;"type="submit" value="Login" name="submitstudent" id="submitstudent"></div>
    </form>
    </div>
    </div>
</body>
</html>
