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

$sql = "UPDATE band  set no_member=". "\"$_POST[no_member]\"  where name=". "\"$_POST[name]\"";
echo "YOU HAVE SUCCESSFULLY UPDATED YOUR CRATING AND RATING"."<br>";
$result=$conn->query($sql);
$conn->close();
?>
<html>
<body text-color="white" style=" background-image:url('music_vectors_shadows_crowd_band_red_background_1920x1200.jpg')" background-position="right">

<h1   ALIGN="center"><pre style="color:yellowgreen"></pre></h1>
<br></br>
<br></br>

 <form>
<input name="newThread" type="button" value="back" onclick="self.close();window.open('bandpage.php')"/>
</form>
 

</div>


</body>
</html>
      