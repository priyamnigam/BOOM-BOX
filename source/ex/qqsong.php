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

$sql = "SELECT name, n0_hit, genre,year,duration FROM songname as t1 where t1.name=". "\"$_POST[name]\"";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

  echo  "<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>". "SONGNAME: " . $row["name"]. "<br>"."<br>"."<br>"." NO OF HIT: " . $row["n0_hit"] ."<br>"."<br>"."<br>"."GENRE: ". $row["genre"]. "<br>"."<br>"."<br>"."YEAR: "  . $row["year"]. "<br>"."<br>"."<br>"."DURATION: "  . $row["duration"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<html>
<body text-color="white" style=" background-image:url('music_vectors_shadows_crowd_band_red_background_1920x1200.jpg')" background-position="right">

<h1   ALIGN="center"><pre style="color:yellowgreen"></pre></h1>
<br></br>
<br></br>

 <form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('songpage.php')"/>
</form>
 

</div>


</body>
</html>
      