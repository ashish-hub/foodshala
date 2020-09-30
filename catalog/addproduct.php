<!-- <!DOCTYPE html>
<html>
<head>
Add a product	
</head>
<body>

<form target="../api/upload.php" method="POST" enctype="multipart/form-data">
	<label>Name</label>
	<input type="text" name="name">
	<br>
	<label>Price</label>
	<input type="text" name="price">
	<br>
	<label>Category(veg or nonveg)</label>
	<input type="text" name="category">
	<br>
	<label>Image</label>
	<input type="file" name="imagename" id="imagename">
	<br>
	<label>Image type(2d or 3d)</label>
	<input type="text" name="imagetype">
	<input type="submit" value="Add Prodect" name="submit">
</form>

</body>
</html> -->



<font size = "+9"><a href="../main.php">FoodShala</a></font>
<div class="container">
 
  <br><br>
<head>ADD new product</head>
 <br> <br> <br>
<form action="../api/upload.php" method="post" enctype="multipart/form-data">
	<label>Name</label>
	<input type="text" name="name">
	<br> <br>
	<label>Price</label>
	<input type="text" name="price">
	<br> <br>
	<label>Category(veg or nonveg)</label>
	<input type="text" name="category">
	<br> <br>
	<label>Image type(2d or 3d)</label>
	<input type="text" name="imagetype">
	<br> <br>
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
