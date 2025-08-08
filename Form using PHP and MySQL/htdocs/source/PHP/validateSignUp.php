<?php

    include "./database.php";

    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        header("Location: ../HTML/signIn.php?msg=registered");
        exit();
    } else {
        header("Location: ../HTML/signUp.php?msg=failed");
        exit();
    }

    $stmt->close();
    $conn->close();

?>