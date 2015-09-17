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
$sql = "INSERT INTO composername (name,city,country ,dob,age )
VALUES
('$_POST[name]','$_POST[city]','$_POST[country]','$_POST[dob]','$_POST[age]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}
// sql to create table
$sql = "INSERT INTO composerpopular (popular,crating,rating ,pic,grossincome,name )
VALUES
('$_POST[popular]','$_POST[crating]','$_POST[rating]','$_POST[pic]','$_POST[grossincome]','$_POST[name]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}



?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('composerform.php')"/>
</form>
<form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('composernameform.php')"/>
</form>

</body>
</head>