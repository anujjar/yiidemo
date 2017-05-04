<?php
// $servername = "localhost";
// $username = "root";
// $password = "root";
// $db="programtest";

 $servername = "mysql3.gear.host";
 $username = "grantform";
 $password = "Yf0Lx8?39P1!";
 $db = "grantform";


$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$phpdate= date('Y-m-d H:i:s',time());
$sql = "INSERT INTO dates (phpdate, sqldate)
VALUES ('{$phpdate}', NOW())";
if ($conn->query($sql) === TRUE) {
	echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


?>