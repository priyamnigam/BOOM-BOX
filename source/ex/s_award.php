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
$sql = "INSERT INTO s_award (awardname,singername,songname,year,singer_ssn,song_ssn )
VALUES
('$_POST[awardname]','$_POST[singername]','$_POST[songname]','$_POST[year]','$_POST[singer_ssn]','$_POST[song_ssn]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}


?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('homeform.php')"/>
</form>
</body>
</head>