<head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
//atul
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "INSERT INTO album (name,track,bandname )
VALUES
('$_POST[name]','$_POST[track]','$_POST[bandname]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}


?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('albumyearform.php')"/>
</form>
<form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('albumform.php')"/>
</form>

</body>
</head>