<?php
    session.start()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/about.css">
    </head>
    <body>

        <nav class="navigation">
            <ul class="list">
                <li id="logo"><a href="#">Organic Farming</a></li>
                <li><a href="index.php">Home</a></li>
                <li class="dropdown">
                    <select class="products" onchange="window.open(this.value, '_blank')">
                        <option id="optitle" value="" disabled selected>Products</option>
                        <option value="fruits.php">Fruits</option>
                        <option value="vegetables.php">Vegetables</option>
                        <option value="grains.php">Grains</option>
                        <option value="dairy.php">Dairy</option>
                     </select>
                </li>
                <li><a href="contact.php" target="_blank">Contact</a></li>
                <li id="about"><a href="about.php" target="_blank">About</a></li>
                <li id="logout"><a href="../../PHP/logout.php">Log Out</a></li>
            </ul>
        </nav>

        <div>
            <img src="../assets/coverImage.jpg" alt="about Image" width="100%" height="60%">
        </div>
        
        <div class="container">
            <div class="content">
                <div>
                    <h1>About Us</h1>
                </div>
                <div>
                    <p>At GreenRoots Organic Farm, we're passionate about growing food
                        the way nature intended — pure, chemical-free, and full of life.
                        What began as a small patch of land and a big dream has grown into 
                        a thriving organic farm rooted in sustainability, health, and community.
                        <br><br> We believe that healthy soil grows healthy food, which nourishes
                        healthy people. That's why we use 100% natural methods, from composting
                        and crop rotation to companion planting and water conservation. 
                        No synthetic pesticides. No GMOs. Just honest, earth-friendly farming.
                        <br><br>Our farm is more than a business — it's a way of life. Every fruit, 
                        vegetable, and herb we grow is nurtured with care and harvested with purpose,
                        ensuring you get the freshest, most nutritious produce possible.
                    </p>
                </div>
            </div>

            <div class="content">
                <div>
                    <h1>Our Mission</h1>
                </div>
                <div>
                    <p>To provide wholesome, organically grown food while promoting sustainable 
                    agriculture and reconnecting people with the land.
                    </p>
                </div>
            </div>

            <div class="content">
                <div>
                    <h1>What Makes Us Different</h1>
                </div>
                <div>
                    <ul>
                        <li>Certified organic farming practices</li>
                        <li>Locally grown and seasonally harvested produce</li>
                        <li>Eco-friendly packaging and delivery</li>
                        <li>Farm tours, workshops & community engagement</li>
                    </ul>
                </div>
            </div>

            <div class="content">
                <p>Whether you're a health-conscious eater, a supporter of local farms, or
                    just curious about where your food comes from  
                </p>
                <div class="ending">
                    <i><p>"we welcome you 
                        to be part of our journey toward a greener future"
                    </p>
                    </i>
                </div>
               
            </div>
        </div>
    </body>
</html>