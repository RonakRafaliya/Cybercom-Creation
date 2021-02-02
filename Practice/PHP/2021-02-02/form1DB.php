<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname="form_one";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "Connected successfully <br>";
}
echo mysqli_select_db($conn,'form_one');
if(!mysqli_select_db($conn,'form_one'))
{
	echo "Database Not Selected!";
}
else
{
	echo "Database  Selected!<br>";
}
?>