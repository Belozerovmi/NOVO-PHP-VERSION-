<?php
session_start();

$email = trim($_POST['email']);
$pass = $_POST['pass'];

$pdo = new PDO('mysql:host=localhost;dbname=novo', 'root', 'root');

// Ищем пользователя
$sql = "SELECT * FROM users WHERE user_email = ?";
$query = $pdo->prepare($sql);
$query->execute([$email]);
$user = $query->fetch();

// Проверяем пароль
if ($user && password_verify($pass, $user['user_pass'])) {
    $_SESSION['user_id'] = $user['id'];
    header('Location: page3.php');
} else {
    header('Location: enter_seller.php?error=auth');
}
exit();
?>