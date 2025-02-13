<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мій профіль</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>

<header>
    <div class="logo">
        <h1>Тату Арт</h1>
        <p>Ink that tells your story</p>
    </div>
    <nav>
        <ul>
            <li><a href="index.php">Головна</a></li>
            <li><a href="logout.php">Вийти</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="profile">
        <h2>👤 Ваш профіль</h2>
        <p><strong>Ім'я:</strong> <?php echo $_SESSION["username"]; ?></p>
        <p><strong>Email:</strong> <?php echo $_SESSION["email"]; ?></p>
        <a href="logout.php" class="btn logout">Вийти</a>
    </section>
</main>

<footer>
    <p>&copy; 2025 Тату Арт. Всі права захищені.</p>
</footer>

</body>
</html>
