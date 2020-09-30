 <?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "foodshala";

// Create connection
// new mysqli("localhost","my_user","my_password","my_db");
$conn = new mysqli($servername, $username, $password,$db);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";
?>

