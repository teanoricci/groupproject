<?php
include 'connection.php';

$customers_name = $_COOKIE['customers_name'] ?? '';

?>


<HTML>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Member</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Roboto+Condensed:wght@300;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/index.css">


</head>
<style>
    .button {
	background-color: gray;
	color: white;
	padding-top: 5px 45px;
	padding-left: 60px;
	padding-right: 60px;
    text-align: center;
	font-family: Georgia, serif;
}
.con {
    padding-top: 250px;
	font-size: 100%;
	color: black;
    
}
p {
    font-family: Georgia, serif;
    
}


</style>
<body>

<header>
    <nav>
        <a href="index.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="member2.php">Become a Member</a>
        <a href="cart.php">Shopping cart</a>
    </nav>
    <div>
            <h1>Pet Ruff</h1>
            <h2>Your pets' favourite place</h2>

            
            
    </div>
    

        <div class= con>
        <button class="button" button onclick="add_customers()" >Be A Member!</button><br><br>
        <p><a href="login.php">Already a Member? Click here to log in!</a></p>

        </div>
<script>
    function add_customers(table,element)
    {
        document.location='addcustomer.php';
    }
</script>
</header>

<section>
   <div class="container">
      
       <h3>New Customer</h3>
        <p>Create an account with us and you'll be able to:

        Check out faster, 
        Save multiple shipping addresses, 
        Access your order history, 
        Track new orders, 
        Save items to your wish list.
       </p>
   </div>
</body>
</HTML>