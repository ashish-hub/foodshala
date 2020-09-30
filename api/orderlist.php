<!DOCTYPE html>
<html lang="en">

<head>
  <title>FoodShala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<font size = "+9"><a href="../main.php">FoodShala</a></font>
<div class="container">
 
           
  <table class="table table-striped">
    <thead>
      <tr>
      	<th>Item image</th>
        <th>Item name</th>
        <th>Quantity</th>
        <th>Ordered BY</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      require "config.php";
      session_start();
	$uid = (int)$_SESSION["user_id"];
	$sqlhelp = "select resturant_id from resturants where resturants.user_id = $uid";
	$result1 = $conn->query($sqlhelp);
	$res_id = 0;
	if ($result1->num_rows > 0) {
	    $row = $result1->fetch_assoc();
	    $res_id = $row["resturant_id"];
	    
	} else {
	    echo "You are not a owner";
	}

      $sqlquery = "select * from orders where resturant_id=$res_id";
      // echo $sqlquery;
      $result = $conn->query($sqlquery);
      while($row = $result->fetch_assoc())
      {
      	$pn = $row["product_name"];
      	$sqlquery = "select image from products where name = \"$pn\" limit 1";
      	$res = $conn->query($sqlquery);
      	$ro = $res->fetch_assoc();
      	$im = $ro["image"];
      	$im = "../images/$im";

      	$qn = $row["quantity"];
      	$un = $row["user_name"];
      	// echo $im;
      	echo "<tr>
        <td><img src=\"$im\" alt=\"\" style=\"width:60px; height:40px;\"/></td>
        <td>$pn</td>
        <td>$qn</td>
        <td>$un</td>
      </tr>";
  }
      ?>
      
    </tbody>
  </table>
</div>

</body>
</html>
