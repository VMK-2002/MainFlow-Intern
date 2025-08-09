<?php
    session_start();

    if(!isset($_SESSION['user_id'])){
        header("Location: ../../Page/signIn.php?msg=Please login to access the site");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Organic Farming</title>
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>

    <nav class="navigation">
        <ul class="list">
            <li id="logo"><a href="#">Organic Farming</a></li>
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
                <select class="products" onchange="window.location.href = this.value">
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

    <div class="hero">
        <h1>Organic Agriculture</h1>
        <h3>Bringing you the freshest produce in the land</h3>
    </div>

</body>
</html>
