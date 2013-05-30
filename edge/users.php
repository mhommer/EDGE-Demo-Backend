<?php
$id = "";
if (array_key_exists("id", $_GET)) {
	$id = $_GET["id"];
}

$con = mysqli_connect("localhost","root","","edge");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "ERR_DB";
}
  
$result = mysqli_query($con,"SELECT * FROM users WHERE id!='" . $id ."'");

echo "List of users:<br />";
while ($row = mysqli_fetch_array($result)) {
	echo $row['first'] . " " . $row['last'] . "<br />";
}

mysqli_close($con);
?>
