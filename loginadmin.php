<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="loginadmin.css">
    
</head>

<body>
    <div class="container">
    <div><button style="background-color: rgb(107, 80, 45);color: rgb(77, 45, 22);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS',sans-serif"><a href="main.php">Back</a></button></div>
        <h1 style="text-align: center;color: antiquewhite;text-indent: 20px;background-color: rgb(77, 45, 22);width: 100%;">Administration Login</h1>
        <div class="container1">
    <form method="post" action="loginadmin.php">
        <div class="vertical-center">Username : <input type="text" name="userad" id="userad" ><span>*</span><br><br></div>
       <div class="vertical-center1">Password : <input type="password" name="passad" id="passad" ><span>*</span><br><br></div>
       <div class="vertical-center2"><input style="color: rgb(77, 45, 22);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;background-color:rgb(172, 145, 126) ;"type="submit" value="Login" name="submitadmin" id="submitadmin"></div>
    </form>
    </div>
    </div>
</body>
</html>

<?php
session_start();
     $usernameerror = $passworderror = "";
     $username = $password = "";
  
  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Library";

$conn = new mysqli($servername, $username,$password,$dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submitadmin'])){

    if (empty($_POST["userad"])) {
        $usernameerror = "Username is required";
        echo "<script>alert('".$usernameerror."');</script>";
      } else {
        $username = test_input($_POST["userad"]);
        $query = "SELECT Username FROM Admins WHERE Username = '$username'";
        $result1 = $conn->query($query);
        if($result1->num_rows==0 && empty($result1->num_rows)){
           echo "<script>alert('Username is wrong. Please enter your Username again.');</script>";
           
        }

      }
  
      if (empty($_POST["passad"])) {
          $passworderror = "Password is required";
          echo "<script>alert('".$passworderror."');</script>";
        } else {
        $password = test_input($_POST["passad"]);
        $query1 = "SELECT Pass FROM Admins WHERE Pass = '$password'";
        $result = $conn->query($query1);
        if($result->num_rows == 0 && empty($result->num_rows)){
           echo "<script>alert('Password is wrong. Please enter your password again.');</script>";
           
        }
        else if($result->num_rows==1 && $result1->num_rows==1){
            $_SESSION['adminusername'] = $username;
            $_SESSION['adminpassword'] = $password;
            header('Location: homeadmin.php');
        }
    }

}

$conn->close();
?>
