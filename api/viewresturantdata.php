<?php
require "config.php";

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{

	$sqlquery = "select * from products";
	$result = $conn->query($sqlquery);

	if ($result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
	    
	      echo $row["product_id"];  
	    }
	    //echo json_encode($rows);
	} else {
	    echo "0 results";
	}
}

$conn->close();
?>