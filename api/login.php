<?php
require "config.php";


$username = $_POST["username"];
$password = $_POST["password"];


$sqlquery = "select password from users where username=\"$username\"";
$result = $conn->query($sqlquery);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$pass = $row["password"];
	if($pass === $password ){
		session_start();
		$sqlquery = "select * from users where username=\"$username\"";
		$result = $conn->query($sqlquery);
		$row = $result->fetch_assoc();
		$_SESSION["name"] = $row["name"];
		$_SESSION["username"] = $username;
		$_SESSION["user_id"] = $row["user_id"];
		$_SESSION["category"] = $row["category"];
		$_SESSION["type"] = $row["type"];
		header('location:../main.php');		
	}else{
		echo "<script>alert(\"wrong password\");</script>";
	}
}else{
	echo "<script>alert(\"wrong username\");</script>";
}


$conn->close();
?>
