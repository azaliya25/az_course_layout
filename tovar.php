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
        crossorigin="anonymous" referrerpolicy="no-referrer">
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

    <!--------------- ОДИН ТОВАР --------------->
    <div class="tovar container">
        <?
        if (isset($_GET['id'])) {
            $get_id = $_GET['id'];
            $tovar_sql = "SELECT * FROM tovar WHERE id='$get_id'";
            $result = $conn->query($tovar_sql);
            $row = $result->fetch_assoc();
            ?>
        <div class="tovar_block">
            <div class="tovar_crumbs">
                <a href="categories.php">категории</a>
                <p>></p><a href="catalog.php">капсулы и формы бумажные</a>
                <p>></p><a href="products.php">формы для пая</a>
                <p>></p><a href="tovar.php">
                    <?= $row['name'] ?>
                </a>
            </div>
        </div>

        <div class="tovar_cards">


            <div class="tovar_card">

                <div class="tovar_left">
                    <div class="tovar_favourites_desct">
                        <i class="fa-regular fa-heart" style="color: #29231d;"></i>
                    </div>
                    <div class="tovar_foto">
                        <img src="assets/img/tovar/product.svg" alt="">
                    </div>
                    <div class="tovar_fotos">
                        <img src="assets/img/tovar/tovar.svg" alt="">
                        <img src="assets/img/tovar/tovar.svg" alt="">
                        <img src="assets/img/tovar/tovar.svg" alt="">
                    </div>
                </div>

                <div class="tovar_right">
                    <div class="tovar_favourites">
                        <i class="fa-regular fa-heart" style="color: #29231d;"></i>
                    </div>
                    <div class="tovar_name">
                        <h4>
                            <?= $row['name'] ?>
                        </h4>
                    </div>
                    <div class="tovar_article">
                        <p>артикул:
                            <?= $row['article'] ?>
                        </p>
                    </div>
                    <div class="tovar_size">
                        <p>размер/вес:
                            <?= $row['size'] ?>
                        </p>
                    </div>
                    <div class="tovar_color">
                        <p>цвет:</p>
                        <div class="tovar_colors">
                            <div class="tovar_color_num-col0"></div>
                            <div class="tovar_color_num-col1"></div>
                            <div class="tovar_color_num-col2"></div>
                        </div>
                    </div>
                    <div class="tovar_price">
                        <p>
                            <?= $row['price'] ?> ₽
                        </p>
                    </div>
                    <hr>
                    <div class="tovar_description">
                        <p>описание:<br>
                            <?= $row['description'] ?>
                        </p>
                    </div>
                    <div class="tovar_btn">
                        <button>в корзину</button>
                    </div>
                </div>

            </div>


        </div>

        <div class="tovar_button">
            <button onclick="document.location.href='redact_tovar.php?id=<?= $row['id'] ?>'">редактировать</button>
            <?
            if (isset($_GET['del'])) {
                $delit = "DELETE FROM tovar WHERE id='$get_id'";
                $conn->query($delit);
            }
            ?>
            <button onclick="document.location.href='del_tovar.php?id=<?= $row['id'] . '&del' ?>'">удалить</button>
        </div>
        <? } ?>
    </div>
    <!--------------- ОДИН ТОВАР --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>