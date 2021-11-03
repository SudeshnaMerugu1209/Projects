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
('All the light we cannot see','5','Anthony','Harper Collins','Literary Fiction'),
('The Color Purple','10','Alice Walker','Harcourt Brace Jovanovich','Historical fiction'),
('The little Prince','10','Antoine de Saint-Exupéry','Clarion Books','Fiction'),
('The Rebecca Notebook: and Other Memories','10','Daphne du Maurier','Victor Gollancz Ltd','Mystery'),
('The Lincoln Highway','10','Amor Towles','Penguin Books','Literary fiction'),
('The Name of the Wind','10','Patrick Rothfuss','DAW Books','Fantasy'),
('One Hundred Years of Solitude','10','Gabriel García Márquez','Editorial Sudamericana, Harper & Row','Literary realism'),
('The Catcher in the Rye','10','J. D. Salinger','Little, Brown and Company','Bildungsroman'),
('The Ocean at the End of the Lane','10','Neil Gaiman','William Morrow and Company','Magical Realism'),
('Riders of the Purple Sage','10','Zane Grey','Harper & Brothers, Grosset & Dunlap','Western Fiction'),
('Shogun','10','James Clavell','Blackstone Publishing','Historical fiction'),
('In the Woods','10','Tana French','Penguin Books','Mystery'),
('The Martian','10','Andy Weir','Crown Publishing','Science Fiction'),
('The Handmaid's Tale: The Graphic Novel','10','Margaret Atwood','Knopf Doubleday Publishing Group','Speculative fiction'),
('The Big Sky','10','Alfred Bertram Guthrie','William Sloane Associates','Western Fiction'),
('In Search of Lost Time','10','Marcel Proust','Grasset and Gallimard','Philosophical fiction'),
('Crossroads','10','Jonathan Franzen','Farrar, Straus and Giroux','Literary fiction'),
('The House of the Spirits','10','Isabel Allende','Alfred A. Knopf','Magical Realism'),
('Trail of Lightning','10','Rebecca Roanhorse','Saga Press','Speculative fiction'),
('Educated','10','Tara Westover','Random House','Memoir'),
('War and Peace','10','Leo Tolstoy','Vintage','Historical fiction'),
('The Silence of the Lambs','10','Thomas Harris','St. Martin's Press','Thriller'),
('A Game of Thrones','10','George R. R. Martin','Bantam Spectra','Fantasy'),
('Adventures of Huckleberry Finn','10','Mark Twain','Chatto & Windus / Charles L. Webster And Company','Literary realism'),
('Great Expectations','10','Charles Dickens','Chapman & Hall','Bildungsroman'),
('The Time Machine','10','H. G. Wells','William Heinemann','Science Fiction'),
('Apples Never Fall','10','Liane Moriarty','Holt, Henry & Company, Inc.','Thriller'),
('The Glass Castle','10','Jeannette Walls','Scribner','Memoir'),
('Milk and honey','10','Rupi Kaur','Andrews McMeel Publishing','Poetry'),
('The 48 Laws of Power','10','Robert Greene','hg book centre','Self-help'),
('The Sun and Her Flowers','10','Rupi Kaur','Andrews McMeel Publishing','Poetry')";
$conn->query($querybook);





$conn->close();
?>
