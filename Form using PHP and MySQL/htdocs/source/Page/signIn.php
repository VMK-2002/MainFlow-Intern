<?php


    session_start();

    include "../PHP/database.php";

    global $result;
    $result = null;
    $msg = $_GET['msg'] ?? "";

    if($_SERVER["REQUEST_METHOD"] === "POST"){

        $user = $_POST['Username/Email'];

        $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";

        if (preg_match($pattern, $user)) {
            $stmt = $conn->prepare("SELECT id, username, password FROM users where email = ?");
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $result = $stmt->get_result();
        } else {
            $stmt = $conn->prepare("SELECT id, username, password FROM users where username = ?");
            $stmt->bind_param("s", $user);
            $stmt->execute();
            $result = $stmt->get_result();
        }

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                if(password_verify($_POST['password'], $row["password"])){
                    $_SESSION['user_id'] = $row["id"];
                    $_SESSION['username'] = $row["username"];

                    header("Location: ../Home/page/index.php");
                    exit();
                }
                else{
                    $msg = "Wrong Password. Try again";
                }
            }
        } 
        else {
            $msg = "No Username or email found. ";
        }
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
                }, 3000); 
            </script>
        <?php endif; ?>

        <div class="container">
            <div class="content1">
                <h1>WELCOME TO ORGANIC FORMING</h1>
            </div>
            <div class="content2">
                <h1>Sign In</h1>

                <div class="formdiv">
                    <form method="POST">
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

                <p>Don't have an Account ? <a href="../Page/signup.php">Sign Up</a></p>
            </div>
        </div>
    </body>
</html>