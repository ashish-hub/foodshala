<!DOCTYPE html>
<html style="margin: 0;padding:0";>
<head>
<title>Foodshala</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>


<body style="margin: 0; padding:0">


<?php
require "navbar/navbar.php";
?>


<?php
require "catalog/vegcatalog.php";
?>
<?php
require "catalog/nonvegcatalog.php";
?>
<!--<iframe src="catalog/nonvegcatalog.php" style="width:100%; height:100%; border:0; overflow:hidden"></iframe>-->
<?php
if($_SESSION)
{

if($_SESSION["type"]=="customer" OR $_SESSION["type"]=="Customer")
echo "<font size=\"+2\">Enter the name of item you want to order.(Please write exact item name). Item name is written on right side of image.</font>
<form action=\"api/order.php\" method=\"post\" enctype=\"multipart/form-data\">
  <label>Name of item you want to Order</label>
  <input type=\"text\" name=\"name\">
  <label>Quantity</label>
  <input type=\"int\" name=\"quantity\">
  <input type=\"submit\" value=\"Order Now\" name=\"submit\">
</form>";
}
?>
</body>
</html>