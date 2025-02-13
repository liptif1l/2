<?php session_start(); ?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тату-сайт</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">
        <h1>Тату Арт</h1>
        <p>Ink that tells your story</p>
    </div>
    <nav>
        <ul>
            <li><a href="home.html">Home</a></li>
            <li><a href="artists.html">Artists</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">Contact</a></li>
            <?php if (isset($_SESSION["username"])): ?>
                <li><a href="dashboard.html">👤 <?php echo $_SESSION["username"]; ?></a></li>
                <li><a href="logout.php">Вийти</a></li>
            <?php else: ?>
                <li><a href="login.html">Увійти</a></li>
                <li><a href="register.html">Реєстрація</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>

<main>
    <div class="content">
        <section class="intro">
            <h2>Знайдіть своє ідеальне тату!</h2>
            <p>Татуювання — це вираження особистості та стиль, який супроводжує вас усе життя.</p>
        </section>

        <!-- Блок акаунта збоку -->
        <aside class="user-account">
            <?php if (isset($_SESSION["username"])): ?>
                <h3>👤 Мій акаунт</h3>
                <p>Вітаю, <strong><?php echo $_SESSION["username"]; ?></strong>!</p>
                <a href="profile.php" class="btn">Перейти в профіль</a>
                <a href="logout.php" class="btn logout">Вийти</a>
            <?php else: ?>
                <h3>Ви не увійшли</h3>
                <a href="login.html" class="btn">Увійти</a>
                <a href="register.html" class="btn">Реєстрація</a>
            <?php endif; ?>
        </aside>
    </div>
</main>

<footer>
    <p>&copy; 2025 Тату Арт. Всі права захищені.</p>
</footer>

</body>
</html>
