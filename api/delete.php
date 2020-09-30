
<?php

require "config.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$name = $_POST["name"];
	// echo $image_name;
	$uid = (int)$_SESSION["user_id"];
	echo $uid;
	$sqlhelp = "select resturant_id from resturants where resturants.user_id = $uid";
	$result1 = $conn->query($sqlhelp);
	$res_id = 0;
	if ($result1->num_rows > 0) {
	    $row = $result1->fetch_assoc();
	    $res_id = $row["resturant_id"];
	    
	} else {
	    echo "You are not a owner";
	}

	$sqlquery = "delete from products where name = \"$name\" and resturant_id = $res_id";
	$result = $conn->query($sqlquery);

	if ($result) {
	   
	} else {
	    echo "0 results";
	}
}

$conn->close();



header('location:../main.php')
?>
