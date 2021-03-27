<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "omi";

$conn = mysqli_connect($servername, $username, $password, $database);

$sql = "select * from omi";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
echo $num;

if(!$result)
{
	echo "Erro ".mysqli_error($conn);
}
else
{
	echo "Data inserted successfully : )";
}

?>