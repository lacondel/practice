<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!empty($login) && !empty($password)) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE user_login = ?");
        $stmt->execute([$login]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['user_password'])) {
            $_SESSION['user_login'] = $login;
            header('Location: welcome.php');
            exit;
        } else {
            header('Location: index.php?error=Неверный логин или пароль');
            exit;
        }
    } else {
        header('Location: index.php?error=Заполните все поля');
        exit;
    }
}
