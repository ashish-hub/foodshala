
<?php

require "config.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$name = $_POST["name"];
	// echo $image_name;
	$username = $_SESSION["username"];
	$quantity = (int)$_POST["quantity"]; 

	$sqlhelp = "select resturant_id from products where name = \"$name\" limit 1";
	$result1 = $conn->query($sqlhelp);
	$res_id = 0;
	if ($result1->num_rows > 0) {
	    $row = $result1->fetch_assoc();
	    $res_id = $row["resturant_id"];
	    
	} else {
	    echo "You are not a owner";
	}
	
	$sqlquery = "insert into orders(product_name,quantity,resturant_id,user_name) values(\"$name\",$quantity,$res_id,\"$username\")";
	$result = $conn->query($sqlquery);


}

$conn->close();



header('location:../main.php');
echo "<script> alert(\"Order of $quantity $name is successful\"); </script>";
?>
