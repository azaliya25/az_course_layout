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

    <!--------------- ИЗБРАННОЕ --------------->
    <div class="favourites container">
        <h2>ИЗБРАННОЕ</h2>
        <div class="favourites_block">
            <div class="favourites_product">
                <div class="favourites_foto">
                    <img src="assets/img/favourites/favourites.svg" alt="">
                </div>
                <div class="favourites_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="favourites_color">
                    <p>цвет:</p>
                    <div class="favourites_color_num-col0"></div>
                </div>
                <div class="favourites_price">
                    <p>110 ₽</p>
                </div>
                <div class="favourites_del">
                    <i class="fa-regular fa-trash-can" style="color: #29231d;"></i>
                </div>
            </div>
            <div class="favourites_product">
                <div class="favourites_foto">
                    <img src="assets/img/favourites/favourites.svg" alt="">
                </div>
                <div class="favourites_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="favourites_color">
                    <p>цвет:</p>
                    <div class="favourites_color_num-col0"></div>
                </div>
                <div class="favourites_price">
                    <p>110 ₽</p>
                </div>
                <div class="favourites_del">
                    <i class="fa-regular fa-trash-can" style="color: #29231d;"></i>
                </div>
            </div>
            <div class="favourites_product">
                <div class="favourites_foto">
                    <img src="assets/img/favourites/favourites.svg" alt="">
                </div>
                <div class="favourites_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="favourites_color">
                    <p>цвет:</p>
                    <div class="favourites_color_num-col0"></div>
                </div>
                <div class="favourites_price">
                    <p>110 ₽</p>
                </div>
                <div class="favourites_del">
                    <i class="fa-regular fa-trash-can" style="color: #29231d;"></i>
                </div>
            </div>
        </div>
    </div>
    <!--------------- ИЗБРАННОЕ --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>