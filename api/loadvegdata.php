<?php
require "config.php";
?>

<?php
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$sqlquery = "select * from products";
	$result = $conn->query($sqlquery);
	if ($result->num_rows > 0) {
	    //$rows = array();
	    $countitems = 0;
	    while($row = $result->fetch_assoc()) {
	      //echo $row["product_id"].$row["resturant_id"].$row["category"].$row["name"].$row["price"].$row["image"].$row["image_type"];	
			$price = $row["price"];
			$image = $row["image"];
			$image = "images/$image";
			$type = $row["category"];
			$category = $row["category"];
			$resturant_id = $row["resturant_id"];
			$productname = $row["name"];
			$image_type = $row["image_type"];
			$sqlquery = "SELECT name from resturants WHERE resturant_id=$resturant_id limit 1";
			$res = $conn->query($sqlquery);
			$data = $res->fetch_assoc();
			$name = $data["name"];
			if($category == "VEG" or $category =="veg" or $category=="Veg"){
				++$countitems;
				if($image_type == "3d"){
						echo  "<li class=\"veg product\">
		    					<div class=\"details\"><h2>$name</h2><p class=\"price\">$price</p></div>
		    					<div class=\"logo\"><img src='' style=\"margin-left:-10%\" alt='$type $productname' /></div>
		    					<div class=\"photo\"><img src='$image' alt='' /></div>
		  						</li>";
				}else{
					  	echo "<li class=\"veg product\">
		    					<div class=\"details\"><h2>$name</h2><p class=\"price\">$price</p></div>
		    					<div class=\"logo\" ><img src='' style=\"margin-left:-10%\" alt='VEG $productname' /></div>
		    					<div class=\"photo\"><img src='$image' alt='' style=\"padding-top:30%;margin-bottom:-20%;margin-left:-19%; height:110%; max-width:100%; clip-path: polygon(50% 40%, 100% 70%, 50% 100%, 0 70%);\"/></div>
		  						</li>";
				}
			}
	    }
	    
	    if($countitems%6 != 0){
	    	$countitems = 6 - $countitems%6;
	    	while($countitems--){
	    		echo "<li class=\"veg product\"><div class=\"details\"><h2></h2><p class=\"price\"></p></div><div class=\"logo\"><img src='' alt='' /></div><div class=\"photo\"><img src='' alt='' /></div></li>";
	    	} 
	    }

	    //echo json_encode($rows);
	} else {
	    echo "no data present";
	}
}









$conn->close();
?>