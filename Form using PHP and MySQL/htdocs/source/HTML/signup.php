<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            Sign Up
        </title>
        <link rel="stylesheet" href="../CSS/login.css">
    </head>
    <body>
        <div class="container">
            <div class="content1">
                <h1>WELCOME TO ORGANIC FORMING</h1>
            </div>
            <div class="content2">
                <h1>Registration</h1>
                
                <div class="formdiv">
                    <form action="../PHP/validateSignUp.php" method="post">
                        <div class="formgroup">
                            <label>Username</label>
                            <input type="text" name="Username" placeholder="Enter your Username">
                        </div>
                        <div class="formgroup">
                            <label>Email</label>
                            <input type="email" name="Email" placeholder="Enter your Email">
                        </div>
                        <div class="formgroup">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your Password">
                        </div>
                        <div class="formgroup">
                            <label>Confirm Password</label>
                            <input type="password" placeholder="Re-enter your Password">
                        </div>
                        <div class="formgroup">
                            <button type="submit" name="login" value="login">Sign In</button>
                        </div>
                    </form>
                </div>

                <p>Already have an Account ? <a href="../HTML/signIn.php">Sign In</a></p>
            </div>
        </div>
    </body>
</html>