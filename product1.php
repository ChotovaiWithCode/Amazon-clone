<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product1</title>
    <link rel="stylesheet" href="product1.css">
    <link rel="stylesheet" href="heder.css">
    <link rel="stylesheet" href="prize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Indie+Flower&family=Itim&family=Jersey+10+Charted&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Noto+Sans:ital,wght@0,100..900;1,100..900&family=Pacifico&family=Play:wght@400;700&family=Rubik+Wet+Paint&family=Satisfy&display=swap" rel="stylesheet">

</head>
<body>
<?php include 'heder.php'?>
   <div class="main-container">
   <div class="filter">
      <label for="priceRange">Price Range: </label>
      <input type="range" id="priceRange" min="0" max="1000" step="50" value="1000">
      <span id="priceValue">$1000</span>
    </div>
    <div class="line"></div>
   <div class="container">
        <div class="box1 product" price="700">
            <div class="left1">
                <img class="left1-img" src="web_img/pic36-removebg-preview.png">
            </div>
            <div class="right1">
                <p>CyberpowerPC Gamer Master Gaming PC, AMD Ryzen 5 7600 3.8GHz, GeForce RTX 4060 8GB, 16GB DDR5, 500GB NVMe SSD, Wi-Fi Ready & Windows </p>
                <div class="rating"></div>
                <div class="price" >700$</div>
                <p class="delivery">Delivery <b>Wed, Nov 27</b></p>
                
                <button class="btn"type="submit">Add to Cart</button>
                
            </div>
        </div>
        <div class="box2 product" price="500">
            <div class="left2">
                <img class="left2-img" src="web_img/pic37-removebg-preview.png">
            </div>
            <div class="right1">
                <p>Thermaltake LCGS Quartz i460 R4 Gaming Desktop (Intel Core™ i5-13400F, 3600Mhz 16GB RGB Memory, NVIDIA GeForce® RTX 4060, 1TB NVMe M.2)</p>
                <div class="rating"></div>
                <div class="price">500$</div>
                <p class="delivery">Delivery <b>Wed, Nov 27</b></p>
                
                <button class="btn"type="submit">Add to Cart</button>
                
            </div>
        </div>
   </div>
   <script src="prize.js"></script>
</body>
</html>