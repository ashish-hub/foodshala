 <?php


require "config.php";


$name = $_POST["name"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"];
$category = $_POST["category"];

if($confirmpassword != $password){ alert "Password Does Not Match"; };

$sqlquery = "select * from users where username=\"$username\"";
$result = $conn->query($sqlquery);
$data = $result->fetch_assoc();
if($data["username"] == $username){ alert "Username already exists";}
else{
	$sqlquery = "insert INTO users(name, username, password, type, category) VALUES(\"$name\",\"$username\",\"$password\",\"customer\",\"$category\")";
	$result = $conn->query($sqlquery);
}








$conn->close();

//header('location:../main.php')
?>
