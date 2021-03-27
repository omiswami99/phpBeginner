<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
	echo "Not connected".mysqli_connect_error($conn);
}
else
{
	echo "Successfully connected<br>";
}

$sql = "CREATE DATABASE new";
$result = mysqli_query($conn, $sql);

if(!$result)
{
	echo "Something went wrong : ".mysqli_error($conn);
}
else
{
	echo "Successfully created the Database";
}

?>