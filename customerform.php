<?php
include 'connection.php';

$customers_name = $_COOKIE['customers_name'] ?? '';

?>
<!DOCTYPE html>
<html>
<head>
<title>Sign in</title>
</head>
<style>
body {
  background-image: url('bg.jpg');
}
h2 {
	font-size: 200%;
	text-align: center;
    color: #808080;
	font-family: Georgia, serif;
}
form {
	text-align: center;
	color: black; 
	font-size: 100%;
	font-family: Georgia, serif;
}
button {
	background-color: gray;
	color: white;
	padding: 10px 10px;
	padding-left: 60px;
	padding-right: 60px;
    text-align: center;
	font-family: Georgia, serif;
    font-size: 100%;
}
.con {
    padding-top: 150px;
	font-size: 100%;
	color: black;
    
}
.container {
    position: absolute;
    left: 550px;
  margin: 20px;
  width: 300px;
  padding-top: 50px;
  padding-bottom:50px;
  padding-left:50px;
  padding-right:50px;
  background-color: white;
}
</style>
<body>

    <div class= con>
    <form action="addcustomer.php" method="post" class=container>
<h2> Sign in</h2>
       <label for="name">Full Name:  </label>
       <input type="text" name="customers_name" placeholder="John Doe" required><br><br>
       <label for="email">Email:</label> 
       <input type="email" name="customers_email" placeholder="example@example.com" required><br><br>
       <label for="number">Phone Number:</label>
       <input type="tel" name="customers_phone" placeholder="123-45-678" required><br><br>
       <label for="password">Password:  </label>
       <input type="password" name="customers_password" placeholder="password" required><br><br>
       <button class="button">Sign in</button><br><br>
       <p><a href="index.php">Click here to continue shopping!</a></p>

       
</div>

</form>

</body>
</html>
