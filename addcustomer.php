<?php
$servername = "localhost";
$username = "root";
$password = ""; //Your password here
$dbname = "pet-store-project";

$id = $_POST["customers_id"];
$name = $_POST["customers_name"];
$email = $_POST["customers_email"];
$number = $_POST["customers_phone"];
$passwords = $_POST["customers_password"];

$_SESSION['customers_id']=$_POST["customers_id"];
$_SESSION['customers_name']=$_POST["customers_name"];
$_SESSION['customers_email']=$_POST["customers_email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
die("Connection failed: " . $conn->connect_error);
$sql = "INSERT INTO customers (customers_id, customers_name, customers_email, customers_phone, customers_password) VALUES (?,?, ?, ?,?)";

if ($stmt = $conn->prepare($sql))
$stmt->bind_param("issis", $id, $name, $email, $number, $passwords);
else
{
$error = $conn->errno . ' ' . $conn->error;
echo $error;
}
$stmt->execute();
echo "Customer has been successfully added!";
$conn->close();
header("Location:customerform.php");

?>
