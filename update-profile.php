<?php
session_start();
include ('includes/connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $postal_code = $_POST['postal_code'];

    $stmt = $conn->prepare("UPDATE users SET last_name = ?, first_name = ?, phone = ?, email = ?, city = ?, postal_code = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $last_name, $first_name, $phone, $email, $city, $postal_code, $user_id);

    if ($stmt->execute()) {
        $_SESSION['success'] = "данные успешно обновлены!";
        header('Location: user.php');
        exit();
    } else {
        $_SESSION['error'] = "ошибка при обновлении данных: " . $stmt->error;
        header('Location: user.php');
        exit();
    }

    $stmt->close();
} else {
    header("Location: login_up.php");
    exit();
}
?>