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
$sql = "INSERT INTO singername (name,city,country ,dob,age )
VALUES
('$_POST[name]','$_POST[city]','$_POST[country]','$_POST[dob]','$_POST[age]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}


// sql to create table
$sql = "INSERT INTO singerpopular (popular,srating,rating ,pic,grossincome,name )
VALUES
('$_POST[popular]','$_POST[srating]','$_POST[rating]','$_POST[pic]','$_POST[grossincome]','$_POST[name]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}
// sql to create table
$sql = "INSERT INTO belong (singername ,bandname)
VALUES
('$_POST[name]','$_POST[bandname]')";

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}

/*         //plsql trigger
$i;
$sql = "delimiter $$
create trigger tsinger
after insert on singerpopular
for each row
begin

select max(ssn) into i from singer;
set $i=$i+1;
INSERT INTO singer (ssn,name,popular )
VALUES
($i,new.name,new.popular)
end $$
delimiter;
";            */

if ($conn->query($sql) === TRUE) {
    echo "Tuple inserted successfully";
} else {
    echo "Error creating table: " . $conn->error;
$conn->close();
}

?>
<form>
<input name="newThread" type="button" value="continue" onclick="self.close();window.open('singergenreform.php')"/>
</form>
<form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('singernameform.php')"/>
</form>

</body>
</head>