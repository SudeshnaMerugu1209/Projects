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
        <div class="vertical-center">User ID : <input type="number" name="userst" id="userst" min="200010001" max="200030060"><span>*</span><br><br></div>
       <div class="vertical-center1">Password : <input type="password" name="passst" id="passst" ><span>*</span><br><br></div>
       <div class="vertical-center2"><input style="color: rgb(77, 45, 22);font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;background-color:rgb(172, 145, 126) ;"type="submit" value="Login" name="submitstudent" id="submitstudent" class="submitstudent"></div>
    </form>
    </div>
    </div>
</body>
</html>

<?php
session_start();
     $useriderror = $passworderror = "";
     $userid = $password = "";
  
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

if(isset($_POST['submitstudent'])){

    if (empty($_POST["userst"])) {
        $useriderror = "Username is required";
        echo "<script>alert('".$useriderror."');</script>";
      } else {
        $userid = test_input($_POST["userst"]);
        $query = "SELECT UserId FROM Students WHERE UserId = $userid";
        $result1 = $conn->query($query);
        if($result1->num_rows==0 && empty($result1->num_rows)){
           echo "<script>alert('UserId is wrong. Please enter your UserId again.');</script>";
           
        }

      }
  
      if (empty($_POST["passst"])) {
          $passworderror = "Password is required";
          echo "<script>alert('".$passworderror."');</script>";
        } else {
        $password = test_input($_POST["passst"]);
        $query1 = "SELECT UserPassword FROM Students WHERE UserPassword = '$password'";
        $result = $conn->query($query1);
        if($result->num_rows == 0 && empty($result->num_rows)){
           echo "<script>alert('Password is wrong. Please enter your password again.');</script>";
           
        }
        else if($result->num_rows==1 && $result1->num_rows==1){
            $_SESSION['userid'] = $userid;
            $_SESSION['password'] = $password;
            header('Location: homestudent.php');
        }
    }

}

$conn->close();
?>
