<?php
session_start();
include ('includes/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    if (empty($phone) || empty($password)) {
        $_SESSION['error']['empty'] = "пожалуйста, заполните все поля!";
        header("Location: login.php");
        exit();
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;
            header("Location: user.php");
            exit();
        } else {
            $_SESSION['error']['password'] = "неправильный пароль!";
            header("Location: login_up.php");
            exit();
        }
    } else {
        $_SESSION['error']['phone'] = "пользователь с таким номером телефона не найден!";
        header("Location: login_up.php");
        exit();
    }

    $stmt->close();
}
?>