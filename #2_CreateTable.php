<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "omi";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "CREATE TABLE `omi`( `sno` INT(6) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL , PRIMARY KEY (`sno`))"; 
$result = mysqli_query($conn, $sql);

if(!$result)
{
	echo "Erro ".mysqli_error($conn);
}
else
{
	echo "Table created successfullyy : )";
}

?>