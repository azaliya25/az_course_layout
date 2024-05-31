<?
include ('includes/connect.php');
include ('includes/header.php');

if (isset($_GET['id'])) {
    $catalog_id = $_GET['id'];
} else {
    echo "каталог не выбран";
    exit;
}

$catalog_sql = "SELECT c1.catalog_name as catalog_name, c2.catalog_name as parent_catalog_name, cat.categories_name as category_name 
                FROM catalog c1
                LEFT JOIN catalog c2 ON c1.parent_id = c2.id
                LEFT JOIN categories cat ON c2.parent_id = cat.id
                WHERE c1.id = '$catalog_id'";
$catalog_result = $conn->query($catalog_sql);

if ($catalog_result->num_rows > 0) {
    $catalog_info = $catalog_result->fetch_assoc();
} else {
    echo "каталог не найден";
    exit;
}
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

    <!--------------- ТОВАРЫ --------------->
    <div class="products container">
        <div class="products_block">
            <div class="products_crumbs">
                <a href="categories.php">категории</a>
                <p>></p>
                <?php if (isset($catalog_info['category_name'])) { ?>
                <a href="categories.php">
                    <?= $catalog_info['category_name'] ?>
                </a>
                <p>></p>
                <?php } ?>
                <a href="catalog.php?id=<?= $catalog_id ?>">
                    <?= $catalog_info['catalog_name'] ?>
                </a>
            </div>
        </div>

        <div class="products_cards">

            <?
            $sql = "SELECT * FROM tovar WHERE parent_id='$catalog_id'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) { ?>
            <div class="products_card">
                <div class="products_favourites">
                    <i class="fa-regular fa-heart" style="color: #29231d;"></i>
                </div>
                <div class="products_foto">
                    <img src="assets/img/products/product.svg" alt="">
                </div>
                <hr>
                <div class="products_name">
                    <h4>
                        <?= $row['name'] ?>
                    </h4>
                </div>
                <div class="products_price-btn">
                    <p>
                        <?= $row['price'] ?> ₽
                    </p>
                    <button>в корзину</button>
                </div>
                <div class="products_detailed">
                    <a href="tovar.php?id=<?= $row['id'] ?>">подробнее</a>
                </div>
            </div>

            <? }
            } else {
                echo "нет товаров в этой категории";
            }
            ?>
        </div>
    </div>
    <!--------------- ТОВАРЫ --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>