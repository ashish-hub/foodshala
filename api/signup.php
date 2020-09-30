<?php
require "config.php";


$username = $_POST["username"];
$password = $_POST["password"];
$type = $_POST["type"];
$name = $_POST["name"];
// echo $type;
$category = "none";
$uid = 0;


if($type == "Customer")
{
	$category = $_POST["category"];
	echo  "insert into users(name,username,type,password,category) values(\"$name\",\"$username\",\"$type\",\"$password\",\"$category\")";
	$sqlquery = "insert into users(name,username,type,password,category) values(\"$name\",\"$username\",\"$type\",\"$password\",\"$category\")";
	$result = $conn->query($sqlquery);
	echo "select user_id from users where username = \"$username\") limit 1";
	$sqlquery = "select user_id from users where username = \"$username\" limit 1";
	$result = $conn->query($sqlquery);
	$row = $result->fetch_assoc();
	$uid = $row["user_id"];
}
else
{
	$res_name = $_POST["res_name"];
   $res_add = $_POST["resturantaddress"];
	$sqlquery = "insert into users(name,username,type,password,category) values(\"$name\",\"$username\",\"$type\",\"$password\",\"none\")";
	$result = $conn->query($sqlquery);
	echo "select user_id from users where username = \"$username\") limit 1";
	$sqlquery = "select user_id from users where username = \"$username\" limit 1";
	$result = $conn->query($sqlquery);
	$row = $result->fetch_assoc();
	$uid = $row["user_id"];
	$sqlquery = "insert into resturants(name,address,user_id) values(\"$res_name\",\"$res_add\",\"$uid\")";
	$result = $conn->query($sqlquery);	
}


session_start();
$sqlquery = "select * from users where user_id=$uid";
$result = $conn->query($sqlquery);
$row = $result->fetch_assoc();
$_SESSION["name"] = $row["name"];
$_SESSION["username"] = $row["username"];
$_SESSION["user_id"] = $row["user_id"];
$_SESSION["category"] = $row["category"];
$_SESSION["type"] = $row["type"];
header('location:../main.php');		
$conn->close();
?>
