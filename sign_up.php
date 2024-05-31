<?
include ('includes/connect.php');
include ('includes/header.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>CHARLIE</title>
    <link rel="shortcut icon" href="assets/img/logo/CHARLIE.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!--------------- ЛОГОТИП --------------->
    <div class="title container">
        <a href="index.php">
            <h1>CHARLIE</h1>
        </a>
    </div>
    <!--------------- ЛОГОТИП --------------->

    <?php
    session_start();
    if (isset($_SESSION['user_id'])) {
        header("Location: user.php");
        exit();
    }

    $last_name = isset($_SESSION['form_data']['last_name']) ? htmlspecialchars($_SESSION['form_data']['last_name']) : '';
    $first_name = isset($_SESSION['form_data']['first_name']) ? htmlspecialchars($_SESSION['form_data']['first_name']) : '';
    $phone = isset($_SESSION['form_data']['phone']) ? htmlspecialchars($_SESSION['form_data']['phone']) : '';
    $email = isset($_SESSION['form_data']['email']) ? htmlspecialchars($_SESSION['form_data']['email']) : '';
    unset($_SESSION['form_data']);
    ?>

    <!--------------- РЕГИСТРАЦИЯ --------------->
    <div class="sign_up container">
        <img src="assets/img/login_up/waffle.svg" alt="" class="waffle_sign">
        <div class="sign_up_form">
            <h2>РЕГИСТРАЦИЯ</h2>

            <form action="registration.php" method="POST">
                <label for="last_name">фамилия</label>
                <input type="text" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <label for="first_name">имя</label>
                <input type="text" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <label for="phone">номер телефона</label>
                <input type="tel" id="phone" name="phone" value="<?php echo $phone; ?>">
                <?php if (isset($_SESSION['error']['phone']))
                    echo '<div class="error">' . $_SESSION['error']['phone'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <label for="email">email</label>
                <input type="text" id="email" name="email" value="<?php echo $email; ?>">
                <?php if (isset($_SESSION['error']['email']))
                    echo '<div class="error">' . $_SESSION['error']['email'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <label for="password">пароль</label>
                <input type="password" id="password" name="password">
                <?php if (isset($_SESSION['error']['password']))
                    echo '<div class="error">' . $_SESSION['error']['password'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['password_length']))
                    echo '<div class="error">' . $_SESSION['error']['password_length'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <label for="confirm_password">подтверждение пароля</label>
                <input type="password" id="confirm_password" name="confirm_password">
                <?php if (isset($_SESSION['error']['password']))
                    echo '<div class="error">' . $_SESSION['error']['password'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['password_length']))
                    echo '<div class="error">' . $_SESSION['error']['password_length'] . '</div>'; ?>
                <?php if (isset($_SESSION['error']['empty']))
                    echo '<div class="error">' . $_SESSION['error']['empty'] . '</div>'; ?>

                <div class="sign_up_confid">
                    <input type="checkbox" id="agreement" name="agreement" class="agreement">
                    <label for="agreement">создавая учетную запись, я соглашаюсь с нашими <a href="">Условиями
                            пользования</a> и <a href="">Политикой конфиденциальности</a></label>
                    <?php if (isset($_SESSION['error']['agreement']))
                        echo '<div class="error">' . $_SESSION['error']['agreement'] . '</div>'; ?>
                </div>

                <input type="submit" value="зарегистрироваться">
            </form>
            <div class="sign_up_login">
                <p>уже есть аккаунт? </p><a href="login_up.php"> войти</a>
            </div>
        </div>
        <img src="assets/img/login_up/piece_cake.svg" alt="" class="piece_cake_sign">
        <img src="assets/img/login_up/piece_cake1.svg" alt="" class="piece_cake_mobile">
    </div>
    <!--------------- РЕГИСТРАЦИЯ --------------->



</body>

</html>

<?
include ('includes/footer.php');
?>