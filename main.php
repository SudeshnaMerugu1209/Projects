<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$querydb = "CREATE DATABASE Library";
$conn->query($querydb);

$dbname = "Library";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


$queryadmin = "CREATE TABLE Admins(
  Id int(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Username varchar(30)  UNIQUE NOT NULL,
  Password varchar(30)  UNIQUE NOT NULL
)";

$conn->query($queryadmin);

$queryad = "INSERT INTO Admins (Username,Password)
VALUES ('sudeshna','january'),
('sahithy','november'),
('meghana','december'),
('tamal','ssl')";

$conn->query($queryad);


$querystudents = "CREATE TABLE Students(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserId int(9) NOT NULL ,
    UserPassword varchar(30) NOT NULL )
    ";

$conn->query($querystudents);

$queryst = "INSERT INTO Students (UserId,UserPassword)
VALUES ('200010001','rohan'),
('200010002','mary'),
('200010003','julie'),
('200010004','ria'),
('200010005','meghana'),
('200010006','sahithy'),
('200010007','sudeshna'),
 ('200010008','tamal'),
('200010009','chandler'),
('200010010','monica')";

if($conn->query($queryst) == TRUE){
  echo "Students is created.<br>";
}else{
  echo "No".$conn->error;
}

$querybooks = "CREATE TABLE Books(
  BookId int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Title varchar(120),
  Quantity int(6) ,
  Author varchar(30) NOT NULL,
  Publisher varchar(50) NOT NULL,
  Genre varchar(20) 
)";

if($conn->query($querybooks)==FALSE){
    echo $conn->error;
}

$querybook = "INSERT INTO Books (Title,Quantity,Author,Publisher,Genre)
VALUES ('Thousand Splendid Suns','10','Khaled Hosseini','Bloomsbury','Literary Fiction'), 
('All the light we cannot see','5','Anthony','Harper Collins','Literary Fiction')";
$conn->query($querybook);





$conn->close();
?>