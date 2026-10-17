<?php
require __DIR__ . "/session.php";
require __DIR__ . "/../db_config.php"; 

$error_login = "";
$error_register = "";
$active_form = "login";

if (isset($_POST['log-in'])) {

    $active_form = "login";
    
    $sql = $connection -> prepare("SELECT id, username, password_hash FROM users WHERE username = ?");
    $sql -> execute([$_POST['username']]);
    
    $result = $sql->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($_POST['password'], $user['password_hash'])) {
        session_regenerate_id(true); // opsec final level (intar-proof)
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $sql->close();
        header("Location: main.php");
        exit;
    } else {
        $error_login = "wrong username or password.";
    }
    $sql->close();
}

if (isset($_POST['register'])) {
    
    $active_form = "register";

    $email = trim($_POST['email']);
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $hash = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (strlen($username) < 4 || strlen($username) > 32) {
        $error_register = "username length invalid (4 - 32 characters).";
    } elseif (strlen($password) < 8 || strlen($password) > 32) {
        $error_register = "password length invalid (8 - 32 characters).";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_register = "invalid email address.";
    } else {
        $sql = $connection->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
        $sql->execute([$username, $email]);
        $exists = $sql->get_result()->fetch_assoc();
        $sql->close();

        if ($exists) {
            $error_register = "username or email already taken.";
        } else {
            $sql = $connection->prepare("INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)");
            $sql->execute([$username, $email, $hash]);
            $sql->close();
            header("Location: login.php");
            $active_form = "login";
            exit;
        }
    }
}