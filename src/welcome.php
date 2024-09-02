<?php
session_start();

if (!isset($_SESSION['user_login'])) {
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="welcome-message">
            <h1>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['user_login']); ?>!</h1>
            <a href="logout.php">Выйти</a>
        </div>
    </div>
</body>

</html>