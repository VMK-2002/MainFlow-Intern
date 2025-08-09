<?php


    include "../PHP/database.php";

    global $msg;
    $msg = "";

    function validate($conn, $username, $email){

            global $msg;

            $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";

            $ustmt = $conn->prepare("SELECT id FROM users where username = ?");
            $ustmt->bind_param("s", $username);
            $ustmt->execute();
            $uresult = $ustmt->get_result();

            $estmt = $conn->prepare("SELECT id FROM users where email = ?");
            $estmt->bind_param("s", $email);
            $estmt->execute();
            $eresult = $estmt->get_result();

            if (!preg_match($pattern, $email)) {
                $msg = "Enter valid Email" ;
                return false;
            }

            if ($uresult->num_rows > 0) {
                $msg = "Username not available.";
                return false;
            }

            if ($eresult->num_rows > 0) {
                $msg = "Email already registered.";
                return false;
            }

            if($_POST['conpass'] !== $_POST['password']){
                $msg = "Password Mis-match. Re-Enter Correct Password.";
                return false;
            }

            return true;
        }

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = preg_replace('/[^a-zA-Z0-9._]/', '', $_POST['Username']);
        $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if(validate($conn, $username, $email)){
            $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);

            try{
                if ($stmt->execute()) {
                    $msg = "User Registered Successfully!";
                } else {
                    $msg = "User Registered Failed. Try Again";
                }

                $stmt->close();
                $conn->close();
            }
            catch(mysqli_sql_exection $e){
                $msg = "Database error: " . $e->getMessage();
            }
            
        }


        
    }

?>

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
                <h1>Registration</h1>
                
                <div class="formdiv">
                    <form method="POST">
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
                            <input type="password" name="conpass" placeholder="Re-enter your Password">
                        </div>
                        <div class="formgroup">
                            <button type="submit" name="login" value="login">Sign In</button>
                        </div>
                    </form>
                </div>

                <p>Already have an Account ? <a href="../Page/signIn.php">Sign In</a></p>
            </div>
        </div>
    </body>
</html>