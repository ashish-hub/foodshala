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
  <h2>Striped Rows</h2>
           
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
	 $uname = $_SESSION["username"];
	$sqlhelp = "select * from orders where user_name=\"$uname\"";
  // echo $sqlhelp;
	$result = $conn->query($sqlhelp);

      
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
