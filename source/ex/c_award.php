<head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO c_award (awardname,composername,songname,year )
VALUES
('$_POST[awardname]','$_POST[composername]','$_POST[songname]','$_POST[year]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}


?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('c_awardssnform.php')"/>
</form>
</body>
</head>