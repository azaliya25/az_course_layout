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
    ?>

    <!--------------- ВХОД --------------->
    <div class="login_up container">
        <img src="assets/img/login_up/waffle.svg" alt="" class="waffle">
        <div class="login_up_form">
            <h2>ВХОД</h2>

            <form action="login.php" method="POST">
                <div class="login_up_for">
                    <label for="phone">номер телефона</label><br>
                    <input type="tel" id="phone" name="phone">
                    <?php
                    if (isset($_SESSION['error']['phone'])) {
                        echo '<div class="error">' . $_SESSION['error']['phone'] . '</div>';
                        unset($_SESSION['error']['phone']);
                    }
                    ?>
                </div>
                <div class="login_up_for">
                    <label for="password">пароль</label><br>
                    <input type="password" id="password" name="password">
                    <?php
                    if (isset($_SESSION['error']['password'])) {
                        echo '<div class="error">' . $_SESSION['error']['password'] . '</div>';
                        unset($_SESSION['error']['password']);
                    }
                    ?>

                    <div class="forgot-password">
                        <a href="/forgot-password">забыли пароль?</a>
                    </div>
                </div>

                <input type="submit" value="войти">
            </form>
            <div class="login_up_sign">
                <p>у вас нет аккаунта? </p><a href="sign_up.php"> зарегистрироваться</a>
            </div>
        </div>
        <img src="assets/img/login_up/piece_cake.svg" alt="" class="piece_cake">
        <img src="assets/img/login_up/piece_cake1.svg" alt="" class="piece_cake_mobile">
    </div>
    <!--------------- ВХОД --------------->



</body>

</html>

<?
include ('includes/footer.php');
?>