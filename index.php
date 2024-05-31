<?
include ('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <title>CHARLIE</title>
    <link rel="shortcut icon" href="assets/img/logo/CHARLIE.svg" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <? include ('includes/header.php'); ?>

    <? if (isset($_GET['page'])) {
        $page = $_GET['page'];
        if ($page == 'about.php') {
            include ('about.php');
        }
        if ($page == 'add_cat.php') {
            include ('add_cat.php');
        }
        if ($page == 'add_tovar.php') {
            include ('add_tovar.php');
        }
        if ($page == 'basket.php') {
            include ('basket.php');
        }
        if ($page == 'catalog.php') {
            include ('catalog.php');
        }
        if ($page == 'categories.php') {
            include ('categories.php');
        }
        if ($page == 'del_catalog.php') {
            include ('del_catalog.php');
        }
        if ($page == 'del_categories.php') {
            include ('del_categories.php');
        }
        if ($page == 'del_tovar.php') {
            include ('del_tovar.php');
        }
        if ($page == 'favourites.php') {
            include ('favourites.php');
        }
        if ($page == 'login_up.php') {
            include ('login_up.php');
        }
        if ($page == 'payment.php') {
            include ('payment.php');
        }
        if ($page == 'products.php') {
            include ('products.php');
        }
        if ($page == 'redact_cat.php') {
            include ('redact_cat.php');
        }
        if ($page == 'redact_tovar.php') {
            include ('redact_tovar.php');
        }
        if ($page == 'sign_up.php') {
            include ('sign_up.php');
        }
        if ($page == 'tovar.php') {
            include ('tovar.php');
        }
        if ($page == 'user.php') {
            include ('user.php');
        }
    } else {
        include ('includes/main.php');
    }
    ?>

    <? include ('includes/footer.php'); ?>


</body>

</html>