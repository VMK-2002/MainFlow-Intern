<?php
$msg = "";
if (isset($_GET['msg']) && $_GET['msg'] == "registered") {
    $msg = "User Registered Successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Sign In
        </title>
        <link rel="stylesheet" href="../CSS/login.css">
    </head>
    <body>

        <?php if ($msg): ?>
            <div class="message">
                <?= $msg ?>
            </div>
            <script>
                setTimeout(function() {
                var msg = document.querySelector('.message');
                if(msg) msg.style.display = 'none';
                }, 6000); 
            </script>
        <?php endif; ?>

        <div class="container">
            <div class="content1">
                <h1>WELCOME TO ORGANIC FORMING</h1>
            </div>
            <div class="content2">
                <h1>Sign In</h1>

                <div class="formdiv">
                    <form action="../PHP/validateSignIn.php" method="post">
                        <div class="formgroup">
                            <label>Username/Email</label>
                            <input type="text" name="Username/Email" placeholder="Enter your Username or Email">
                        </div>
                        <div class="formgroup">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="formgroup">
                            <button type="submit" name="login" value="login">Sign In</button>
                        </div>
                    </form>
                </div>

                <p>Don't have an Account ? <a href="../HTML/signup.php">Sign Up</a></p>
            </div>
        </div>
    </body>
</html>