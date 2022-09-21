<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">

</head>


<body>
    
    <header>
    <nav>
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="member2.php">Become a Member</a>
        <a href="cart.php">Shopping cart</a>
    </nav>
    <?php

if (isset($_POST['submit'])) {
//if( (isset($_POST['email'])) && (isset($_POST['password'])) ){
    
$email=$_POST['email'];
$password=$_POST['password'];

  $sql = "SELECT * FROM customers WHERE customers_email = ? AND customers_password = ? ";
  $statement =$conn->prepare($sql);
   $statement->bind_param("ss", $email,$password);
   $statement->execute();
   $result = $statement->get_result();
   
   if($result->num_rows===0) $success=false;
   else {
      $row = $result->fetch_assoc();
       
      $_SESSION['customers_id']=$row["customers_id"];
      $_SESSION['customers_name']=$row["customers_name"];
      $_SESSION['customers_email']=$row["customers_email"];
      $success=true;
   }
   
if(!$success) {
    //echo ("<p style='color:red;text-align:center'> Invalid Username or Password</p>");
echo '<script type="text/javascript">';
echo ' alert("Invalid Email and Password. Sign in to be A Member.")';
echo '</script>';
}
else {
   header("location: index.php");  //goto admin dashboard
    }
}
?>
      <div>
        <h1>Log in</h1>
        <form method="post">
        <!-- Input email and password -->
        <label>Email:</label><br> 
        <input type="email" id="email" name="email"><br><br>
        <label>Password:</label><br>
        <input type="password" id="password" name="password"></label>
        

        <!-- Sign in  page -->
        <button class="button" type="submit" name="submit">Log in</button>
        
        </div>
        </form>
</header>
</body>

