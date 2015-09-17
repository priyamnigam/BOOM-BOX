<head>
<body>
<?php
$dbservername = "localhost";
$dbuser="root";
$dbpass="";
$dbname="project";  //the name of the database
$chandle = mysql_connect("$dbservername", $dbuser, $dbpass)  or die("Connection Failure to Database");

   
mysql_select_db($dbname, $chandle) or die ($dbname . " Database not found. " . $dbuser);
$c;
$mainsection="band"; //The name of the table
$query1="select name ,year_of_formation,no_member,clipart from " . $mainsection . " as t1 where t1.name = " .  "\"$_POST[name]\"";  //select the home section
$result = mysql_db_query($dbname, $query1) or die("Failed Query of " . $query1);  //do the query
$thisrow=mysql_fetch_row($result);

if ($thisrow)  //if the results of the query are not null
{
  echo "The Home section was found.<br>";
}
else
{
  echo "The Home section was not found.<br>";
}
?>
</body>
</head>