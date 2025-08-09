<?php
    session.start()
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/contact.css">
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
        <div class="container">
            <div class="content1">
                <div>
                    <h1>Contact Us</h1>
                    <p>We'd love to hear from you! Whether you have a question about our organic produce, need help with an order, or want to learn more about sustainable farming — we're here to help.</p>
                </div>
        
                <div class="imgdiv">
                    <img src="../assets/custmer-care.png" alt="customer care" width="200px" height="200 px">
                </div>
            </div>

            <div class="content2">
                <div>
                    <h1>Get in Touch</h1>
                    <p>Use the form below <br> We'll get back to you within 24 hours.</p>
                </div>
                <div class="formdiv">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message:</label>
                            <textarea name="message" rows="4" required></textarea>
                        </div>
                        <div>
                            <button type="submit">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="content3">
                <div>
                    <h1>Visit Us</h1>
                    <p id="subtitle">GreenRoots Organic Farm</p>
                    <p>123 Harvest Lane, Tanjore <br> Tamil Nadu , 625006 <br>
                        <b> Phone:</b> (+91) 98765 43210 
                    <br> <b>Hours:</b> Mon-Sat | 9:00 AM - 6:00 PM</p>
                </div>
            </div>
            <div class="footer">

            </div>
        </div>
    </body>
</html>