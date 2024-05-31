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

    <!--------------- КОРЗИНА --------------->
    <div class="basket container">
        <h2>КОРЗИНА</h2>
        <div class="basket_block">
            <p class="clear">очистить</p>
            <div class="basket_table">
                <p>фото</p>
                <p>название</p>
                <p>цена</p>
                <p>цвет</p>
                <p>количество</p>
            </div>
            <div class="basket_products">
                <div class="basket_foto">
                    <img src="assets/img/basket/product.svg" alt="">
                </div>
                <div class="basket_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="basket_price">
                    <p>110 ₽</p>
                </div>
                <div class="basket_color">
                    <div class="basket_color_num-col0"></div>
                </div>
                <div class="basket_quantity">
                    <button class="quantity-btn minus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepDown()">-</button>
                    <input type="number" class="quantity-input" id="quantity" value="1" min="1">
                    <button class="quantity-btn plus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepUp()">+</button>
                </div>
            </div>
            <hr>
            <div class="basket_products">
                <div class="basket_foto">
                    <img src="assets/img/basket/product.svg" alt="">
                </div>
                <div class="basket_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="basket_price">
                    <p>110 ₽</p>
                </div>
                <div class="basket_color">
                    <div class="basket_color_num-col0"></div>
                </div>
                <div class="basket_quantity">
                    <button class="quantity-btn minus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepDown()">-</button>
                    <input type="number" class="quantity-input" id="quantity" value="1" min="1">
                    <button class="quantity-btn plus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepUp()">+</button>
                </div>
            </div>
            <hr>
            <div class="basket_products">
                <div class="basket_foto">
                    <img src="assets/img/basket/product.svg" alt="">
                </div>
                <div class="basket_name_article">
                    <h4>форма для выпечки пай</h4>
                    <p>артикул: 2an3jkz</p>
                </div>
                <div class="basket_price">
                    <p>110 ₽</p>
                </div>
                <div class="basket_color">
                    <div class="basket_color_num-col0"></div>
                </div>
                <div class="basket_quantity">
                    <button class="quantity-btn minus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepDown()">-</button>
                    <input type="number" class="quantity-input" id="quantity" value="1" min="1">
                    <button class="quantity-btn plus-btn"
                        onclick="event.preventDefault(); document.getElementById('quantity').stepUp()">+</button>
                </div>
            </div>
            <hr>
            <div class="basket_result">
                <p>5 шт. <span>количество</span></p>
                <p>440 ₽ <span>итоговая цена</span></p>
            </div>
            <div class="basket_btn">
                <button>оформить заказ</button>
            </div>
        </div>
    </div>
    <!--------------- КОРЗИНА --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>