<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "omi";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "INSERT INTO `omi` (`name`) values('Amit') ";
$result = mysqli_query($conn, $sql);


if(!$result)
{
	echo "Erro ".mysqli_error($conn);
}
else
{
	echo "Data inserted successfully : )";
}

?>