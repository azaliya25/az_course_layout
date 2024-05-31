<?php
session_start();
include ('includes/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $agreement = isset($_POST['agreement']);

    $_SESSION['error'] = [];

    if (empty($last_name) || empty($first_name) || empty($phone) || empty($email) || empty($password) || empty($confirm_password)) {
        $_SESSION['error']['empty'] = "пожалуйста, заполните все поля!";
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['error']['email'] = "неправильный формат почты!";
        }

        if (!preg_match("/^\+?\d{10,}$/", $phone)) {
            $_SESSION['error']['phone'] = "неправильный формат номера телефона!";
        }

        if ($password !== $confirm_password) {
            $_SESSION['error']['password'] = "пароли не совпадают!";
        }

        if (strlen($password) < 6) {
            $_SESSION['error']['password_length'] = "пароль должен содержать не менее 6 символов!";
        }

        if (!$agreement) {
            $_SESSION['error']['agreement'] = "вы должны согласиться с условиями!";
        }
    }

    if (!empty($_SESSION['error'])) {
        $_SESSION['form_data'] = $_POST;
        header('Location: sign_up.php');
        exit();
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO users (last_name, first_name, phone, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $last_name, $first_name, $phone, $email, $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['success'] = "регистрация прошла успешно!";
            header('Location: login_up.php');
            exit();
        } else {
            $_SESSION['error']['registration'] = "ошибка при регистрации: " . $stmt->error;
            header('Location: sign_up.php');
            exit();
        }

        $stmt->close();
    }
}
?>