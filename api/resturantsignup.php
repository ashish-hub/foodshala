 <?php


require "config.php";



$name = $_POST["name"];
$username = $_POST["username"];
$resturantaddress = $_POST["resturantaddress"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$resturantname = $_POST["resturantname"];


if($confirmpassword != $password){ alert "Password Does Not Match"; };

$sqlquery = "select * from users where username=\"$username\"";
if($data["username"] == $username){ alert "Username already exists";}
else{
	$sqlquery = "insert INTO users(name, username, password, type, category) VALUES(\"$name\",\"$username\",\"$password\",\"resturant\",\"n\")";
	$result = $conn->query($sqlquery);
//	$sqlquery = "select from users(name, username, password, type, category) VALUES(\"$name\",\"$username\",\"$password\",\"customer\",\"$category\")";
//	$result = $conn->query($sqlquery);
//$data = $result->fetch_assoc();
}








$conn->close();

//header('location:../main.php')
?>
