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
$sql = "INSERT INTO composer (ssn,name,popular )
VALUES
('$_POST[ssn]','$_POST[name]','$_POST[popular]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}


?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('composerqform.php')"/>
</form>
<form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('composerform.php')"/>
</form>

</body>
</head>