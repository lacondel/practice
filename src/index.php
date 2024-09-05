<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <?php
        if (isset($_SESSION['user_login'])) {
            echo '<div class="welcome-message">';
            echo '<h1>Добро пожаловать, ' . htmlspecialchars($_SESSION['user_login']) . '!</h1>';
            echo '<a href="logout.php">Выйти</a>';
            echo '</div>';
        } else {
            if (isset($_GET['error'])) {
                echo '<p class="error">' . htmlspecialchars($_GET['error']) . '</p>';
            }
        ?>
            <h2>Авторизация</h2>
            <form action="login.php" method="post">
                <label for="login">Логин:</label>
                <input type="text" id="login" name="login" required><br>
                <label for="password">Пароль:</label>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" value="Войти">
            </form>
            <a href="register.php">Зарегистрироваться</a>
        <?php
        }
        ?>
    </div>
</body>

</html>