<?php
$id = $_GET["id"];

$con = mysqli_connect("localhost","root","","edge");

// Check connection
if (mysqli_connect_errno($con))
{
  echo "ERR_DB";
}
  
$result = mysqli_query($con,"SELECT * FROM users WHERE id='" . $id ."'");

if ($row = mysqli_fetch_array($result)) {
	//user found
	echo "We found you. You are " . $row['first'] . " " . $row['last'] . ".";
}
else {
	echo "No user with id $id found.";
}

mysqli_close($con);
?>
