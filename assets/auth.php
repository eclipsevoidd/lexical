<?php
session_start();
require __DIR__ . "/../db_config.php"; 

$error_login = "";
$error_register = "";

if (isset($_POST['log-in'])) {
    
    $sql = $connection -> prepare("SELECT id, password_hash FROM users WHERE username = ?");
    $sql -> execute([$_POST['username']]);
    
    $result = $sql->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($_POST['password'], $user['password_hash'])) {
        session_regenerate_id(true); // opsec final level (intar-proof)
        $_SESSION['user_id'] = $user['id'];
        $sql->close();
        header("Location: main.php");
        exit;
    } else {
        $error_login = "wrong username or password.";
    }
    $sql->close();
}