
<?php
$target_dir = "../images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// echo $_FILES["fileToUpload"]["name"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


require "config.php";
session_start();
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
	$name = $_POST["name"];
	$price = $_POST["price"];
	$category = $_POST["category"];
	$imagetype = $_POST["imagetype"];
	$image_name = $_FILES["fileToUpload"]["name"];
	echo $image_name;
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

	$sqlquery = "insert into products(category,image,image_type,name,price,resturant_id) values(\"$category\",\"$image_name\",\"$imagetype\",\"$name\",\"$price\",$res_id)";
	$result = $conn->query($sqlquery);

	if ($result) {
	   
	} else {
	    echo "0 results";
	}
}

$conn->close();



header('location:../main.php')
?>
