<?php
session_start();
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!empty($login) && !empty($password)) {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO users (user_login, user_password) VALUES (?, ?)");
        if ($stmt->execute([$login, $passwordHash])) {
            $_SESSION['user_login'] = $login;
            header('Location: welcome.php');
            exit;
        } else {
            $error = 'Ошибка регистрации. Попробуйте снова.';
        }
    } else {
        $error = 'Заполните все поля.';
    }
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <h2>Регистрация</h2>
        <?php if (isset($error)) echo '<p class="error">' . htmlspecialchars($error) . '</p>'; ?>
        <form action="register.php" method="post">
            <label for="login">Логин:</label>
            <input type="text" id="login" name="login" required><br>
            <label for="password">Пароль:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Зарегистрироваться">
        </form>
        <a href="index.php">Назад</a>
    </div>
</body>

</html>