<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $email = trim($_POST["email"]);
    $password = trim($_POST["password"]);

    // Перевірка, щоб всі поля були заповнені
    if (empty($username)  empty($password)) {
        die("Будь ласка, заповніть всі поля!");
    }

    // Хешування пароля
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Збереження у файл (або базу даних)
    $file = fopen("users.txt", "a");
    fwrite($file, "$username, $email, $hashedPassword\n");
    fclose($file);

    echo "<h2>Реєстрація успішна! 🎉</h2>";
    echo "<p><a href='login.html'>Увійти</a></p>";
} else {
    die("Неправильний запит!");
}
?>
