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
('The Handmaid''s Tale: The Graphic Novel','10','Margaret Atwood','Knopf Doubleday Publishing Group','Speculative fiction'),
('The Big Sky','10','Alfred Bertram Guthrie','William Sloane Associates','Western Fiction'),
('In Search of Lost Time','10','Marcel Proust','Grasset and Gallimard','Philosophical fiction'),
('Crossroads','10','Jonathan Franzen','Farrar, Straus and Giroux','Literary fiction'),
('The House of the Spirits','10','Isabel Allende','Alfred A. Knopf','Magical Realism'),
('Trail of Lightning','10','Rebecca Roanhorse','Saga Press','Speculative fiction'),
('Educated','10','Tara Westover','Random House','Memoir'),
('War and Peace','10','Leo Tolstoy','Vintage','Historical fiction'),
('The Silence of the Lambs','10','Thomas Harris','St. Martin''s Press','Thriller'),
('A Game of Thrones','10','George R. R. Martin','Bantam Spectra','Fantasy'),
('Adventures of Huckleberry Finn','10','Mark Twain','Chatto & Windus / Charles L. Webster And Company','Literary realism'),
('Great Expectations','10','Charles Dickens','Chapman & Hall','Bildungsroman'),
('The Time Machine','10','H. G. Wells','William Heinemann','Science Fiction'),
('Apples Never Fall','10','Liane Moriarty','Holt, Henry & Company, Inc.','Thriller'),
('The Glass Castle','10','Jeannette Walls','Scribner','Memoir'),
('Milk and honey','10','Rupi Kaur','Andrews McMeel Publishing','Poetry'),
('The 48 Laws of Power','10','Robert Greene','hg book centre','Self-help'),
('The Sun and Her Flowers','10','Rupi Kaur','Andrews McMeel Publishing','Poetry')
('Pride and Prejudice','5','Jane Austen','Penguin Publications','Classics'),
 ('Jane Eyre','15','Charlotte Bronte','Penguin Publications','Classics'),
 ('Kashi','6','Vineet Bajpai','Treeshade books','Fiction'),
 ('The Lost Symbol','7','Dan Brown','Doubleday','Thriller'),
 ('The Da Vinci Code','5','Dan Brown','Doubleday','Thriller'),
 ('Origin','4','Dan Brown','Doubleday','Thriller'),
 ('Harappa','8','Vineet Bajpai','Treeshade Books','Fiction'),
 ('Pralay','6','Vineet Bajpai','Treeshade Books','Fiction'),
 ('I''ll give you the sun','10','Jandy Nelson','Dial Books','Fiction'),
 ('Norwegian Wood','10','Haruki Murakami','Kodansha','Fiction'),
 ('Never let me go','7','Kazuo Ishiguro','Faber and Faber','speculative fiction'),
 ('Where the Crawdads Sing','10','Delia Owens','G.P Putnam''s Sons','Literary fiction'),
 ('Eleanor Oliphant is completely fine','4','Gail Honeyman','Harper Collins','Fiction'),
 ('Discrete Mathematics and Its Applications','30','Kenneth Rosen','McGraw Hill','Discrete Structures'),
 ('Essential Discrete Mathematics for Computer Science','40','Harry Lewis','Princeton University Press','Discrete Structures'),
 ('Essentials of Discrete Mathematics:Third Edition','50','David J.Hunter','Jones and Bartlett Learning','Discrete Structures'),
 ('Discrete Mathematics and Its Applications: With Combinatorics and Graph Theory','50','Kenneth Rosen','McGraw Hill','Discrete Structures'),
 ('Introductory discrete mathematics','40','V. Balakrishnan','Dover Books','Discrete Structures'),
 ('Introduction to Algorithms, Third Edition','60','Thomas H. Cormen','The MIT Press','Data Structures and Algorithms'),
 ('Data Structures and Algorithms Made Easy in Java','35','Narasimha Karumanchi','Careermonk Publications','Data Structures and Algorithms'),
 ('Data structures and algorithms in C++:3rd Edition','45','Adam Drozdek','Thomson Press','Data Structures and Algorithms'),
 ('Data Structures and Algorithms in Python','50','Michael H. Goldwasser','Wiley','Data Structures and Algorithms')
 ('Algorithms Unlocked','55','Thomas H. Cormen','The MIT Press','Data Structures and Algorithms')
 ('The Algorithm Design Manual','43','Steven S. Skiena','Springer Publications','Data Structures and Algorithms')
('Advanced Data Structures','60','Peter Brass','Cambridge Press','Data Structures and Algorithms'),
('Cracking the Coding Interview: 189 Programming Questions and Solutions 6th Edition','100','Gayle Laakmann McDowell','CareerCup','Data Structures and Algorithms')
('Principles of Macroeconomics','50','N. Gregory Mankiw','Cengage Learning','Economics'),
('Intermediate Microeconomics: A Modern Approach','50','Hal Varian','WW Norton & Co','Economics'),
('Microeconomic Theory: Basic Principles and Extensions','50','Walter Nicholson','Economics'),
('Microeconomic theory','40','Andreu Mas-Colell','Oxford University Press','Economics'),
('Microeconomics: Principles, Problems, and Policies','30','Campbell McConnell','McGraw-Hill Education','Economics'),
('Microeconomic Foundations I: Choice and Competitive Markets','31','David M. Kreps','Princeton University Press ','Economics'),
('Microeconomics: Theory and Applications with Calculus ','25','Jeffrey Perloff','Pearson','Economics'),
('Advanced Macroeconomics Fifth Edition','60','David Romer','McGraw-Hill Education','Economics'),
('Linux Pocket Guide, Third Edition','50','Daniel J. Barrett','O''Reilly Media','Software Systems Lab'),
('Linux Command Line and Shell Scripting Bible','36','Christine Bresnahan','Wiley India Pvt Ltd','Software Systems Lab'),
('Linux System Programming','55','Robert Love','O''Reilly Media','Software Systems Lab'),
('The Linux Command Line, 2nd Edition: A Complete Introduction','47','William Shotts','No Starch Press (RHPS)','Software Systems Lab'),
('Version Control with Git','60','Jon Loeliger','O''Reilly Media','Software Systems Lab'),
('Git Pocket Guide: A Working Introduction','60','Richard E. Silverman','O''Reilly Media','Software Systems Lab'),
('Professional Git','30','Brent Laster','O'Reilly Media','Software Systems Lab'),
";
$conn->query($querybook);

$conn->close();
?>
