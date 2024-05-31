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

    <!--------------- ОПЛАТА --------------->
    <div class="payment ">
        <h2>ОПЛАТА</h2>
        <div class="payment_pay container">
            <div class="payment_block">
                <div class="payment_form">
                    <form action="/payment" method="POST">
                        <!-- Доставка -->
                        <div class="delivery">
                            <h3>1. ДОСТАВКА</h3>
                            <div class="deliv_div">
                                <label for="address" class="payment_fs">адрес</label>
                                <input type="text" id="address" name="address" class="payment_fs">
                            </div>
                            <div class="payment_deliv_input">
                                <p class="payment_fs">способ<br>доставки</p>
                                <div class="payment_deliv_label">
                                    <label>
                                        <input type="radio" name="delivery_method" value="pickup">
                                        <span>курьер</span>
                                    </label>
                                    <label>
                                        <input type="radio" name="delivery_method" value="courier">
                                        <span>самовывоз</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- Получатель -->
                        <div class="recipient">
                            <h3>2. ПОЛУЧАТЕЛЬ</h3>
                            <p class="payment_fs">ваши<br> данные</p>
                            <div class="recip_input">
                                <input type="text" id="recipient_last_name" name="recipient_last_name"
                                    placeholder="фамилия" required>
                                <input type="text" id="recipient_first_name" name="recipient_first_name"
                                    placeholder="имя" required>
                                <input type="tel" id="recipient_phone" name="recipient_phone"
                                    pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="телефон">
                                <input type="email" id="recipient_email" name="recipient_email" placeholder="email"
                                    required>
                            </div>
                        </div>

                        <!-- Оплата -->
                        <div class="payment_pay">
                            <h3>3. ОПЛАТА</h3>
                            <div class="payment_label">
                                <label>
                                    <input type="radio" name="payment" value="card">
                                    <span class="radio-btn"></span> Оплата картой
                                </label><br>
                                <label>
                                    <input type="radio" name="payment" value="cash">
                                    <span class="radio-btn"></span> Оплата наличными
                                </label><br>
                                <label>
                                    <input type="radio" name="payment" value="paypal">
                                    <span class="radio-btn"></span> Sbepay
                                </label>
                            </div>
                        </div>

                        <button type="submit">оплатить</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="order container">
            <div class="order_quantity">
                <div class="order_quantity_and">
                    <h4>ВАШ ЗАКАЗ </h4>
                    <p>/ 7 шт.</p>
                </div>
                <button>изменить</button>
            </div>
            <div class="order_foto">
                <div class="order_foto_desc">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <p>+ еще 2</p>
                </div>
                <div class="order_foto_mobile">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <img src="assets/img/payment/tovar.svg" alt="">
                    <p>+ еще 5</p>
                </div>
            </div>
            <div class="order_price">
                <div class="order_package">
                    <h5>сумма посылки</h5>
                    <p>4 063 ₽</p>
                </div>
                <div class="order_discount">
                    <h5>скидка</h5>
                    <p>-1 354 ₽</p>
                </div>
            </div>
            <div class="order_result">
                <h5>итого</h5>
                <p>2 709 ₽</p>
            </div>
        </div>
    </div>
    <!--------------- ОПЛАТА --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>