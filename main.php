<?php
$servername = "localhost";
$username = "user";
$password = "pass";

$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$querydb = "CREATE DATABASE Library";
$conn->query($querydb);

$dbname = "Library";

$queryadmin = "CREATE TABLE Admins(
  Id UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Username varchar(30) UNIQUE NOT NULL,
  Password varchar(30) UNIQUE NOT NULL
)";

$conn->query($queryadmin);

$queryad = "INSERT INTO Admins (Username,Password)
VALUES ('sudeshna','january')";
$queryad .= "INSERT INTO Admins (Username,Password)
VALUES ('sahithy','november')";
$queryad .= "INSERT INTO Admins (Username,Password)
VALUES ('meghana','december')";
$queryad .= "INSERT INTO Admins (Username,Password)
VALUES ('tamal','ssl')";

$conn->multi_query($queryad);


$querystudents = "CREATE TABLE Students(
    Id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    UserId int(9) NOT NULL UNIQUE,
    UserPassword varchar(30) NOT NULL UNIQUE
    ";

$conn->query($querystudents);

$queryst = "INSERT INTO Students (UserId,User)
VALUES ('200010001','rohan')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010002','mary')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010003','julie')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010004','ria')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010005','meghana')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010006','sahithy')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010007','sudeshna')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010008','tamal')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010009','chandler')";
$queryst .= "INSERT INTO Students (UserId,User)
VALUES ('200010010','monica')";

$conn->multi_query($queryst);

$querybooks = "CREATE TABLE Books(
  BookId int(6 )AUTO_INCREMENT UNIQUE UNSIGNED PRIMARY KEY,
  Title varchar(120) NOT NULL,
  Quantity int(6) UNSIGNED,
  Author varchar(30) NOT NULL,
  Publisher varchar(50) NOT NULL,
  Genre varchar(20) 
)";

$conn->query($querybooks);

$querybook = "INSERT INTO Books (Title,Quantity,Author,Publisher,Genre)
VALUES ('Thousand Splendid Suns','10','Khaled Hosseini','Bloomsbury',) ";




$conn->close();
?>