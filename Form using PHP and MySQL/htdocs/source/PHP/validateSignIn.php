<?php

    session_start();

    include "./database.php";

    global $result;
    $result = null;

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
                header("Location: ../Page/signIn.php?msg=WrongPassword");
                exit();
            }
        }
    } else {
        header("Location: ../Page/signIn.php?msg=NoUser");
        exit();
    }
?>
