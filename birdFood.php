<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Ruff - Bird Foods</title>

    <link rel="stylesheet" href="css/itemPage.css">

</head>

<body>
    
    <header>

        <nav>
            <a href="index.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="member2.php">Become a Member</a>
            <a href="">Shopping cart</a>
        </nav>
    </header>

    <section>
    <br>
    <img src="images/bird_food.jpg" alt="Paris" class="centerImg">
    <br>
    
        
    <div class="cc">
    <div class="row">
        <div class="column">
          <div class="card">
            <h3>Wild Bird</h3>
            <img src="images/foods/bird_food_one.jpg" class="imgFood">
            <p>Price $18</p>
            <button class="button">
                Add to Cart
            </button>
          </div>
        </div>
      
        <div class="column">
          <div class="card">
            <h3>Bonanza</h3>
            <img src="images/foods/bird_food_two.jpeg" class="imgFood">
            <p>Price $15</p> 
            <button class="button">
                Add to Cart
            </button>
            </div>
        </div>
        
        <div class="column">
            <div class="card">
              <h3>Peckish</h3>
              <img src="images/foods/bird_food_three.jpg" class="imgFood">
              <p>Price $15</p> 
              <button class="button">
                  Add to Cart
              </button>
              </div>
          </div>
          
        <div class="column">
          <div class="card">
            <h3>Mazuri</h3>
            <img src="images/foods/bird_food_four.jpg" class="imgFood">
            <p>Price $10</p>
            <button class="button">
                Add to Cart
            </button>  
        </div>
        </div>
      </div>
    </div>
    </section>

    <footer>
        <br>
        <p>Author: Pudubu Dasun<br>
        <a href="mailto:info@petruff.com">info@petruff.com</a></p>
     </footer>
    
     <script src="/js/addItem.js"></script>
    
</body>
</html>