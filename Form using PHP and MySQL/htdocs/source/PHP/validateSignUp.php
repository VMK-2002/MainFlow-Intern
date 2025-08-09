<?php

    include "./database.php";

    $username = preg_replace('/[^a-zA-Z0-9._]/', '', $_POST['Username']);
    $email = filter_input(INPUT_POST, "Email", FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    if(validate($conn, $username, $email, $password)){
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            header("Location: ../Page/signIn.php?msg=registered");
            exit();
        } else {
            header("Location: ../Page/signUp.php?msg=failed");
            exit();
        }

        $stmt->close();
        $conn->close();
    }
    else{
        header("Location: ../Page/signup.php?msg=conpassFail");
        exit();
    }


    function validate($conn, $username, $email, $password){

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
            header("Location: ../Page/signUp.php?msg=invalidEmail");
            exit();
        }

        if ($uresult->num_rows > 0) {
            header("Location: ../Page/signUp.php?msg=userExists");
            exit();
        }

        if ($eresult->num_rows > 0) {
            header("Location: ../Page/signUp.php?msg=emailExists");
            exit();
        }

        if(!password_verify($_POST['conpass'] , $password)){
            header("Location: ../Page/signUp.php?msg=conpassFail");
            exit();
        }

        return true;
    }
    

?>
