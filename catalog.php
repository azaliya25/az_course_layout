<?
include ('includes/connect.php');
include ('includes/header.php');

if (isset($_GET['id'])) {
    $category_id = $_GET['id'];
} else {
    echo "категория не выбрана";
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

    <!--------------- КАТАЛОГ --------------->
    <div class="catalog container">
        <h2>КАТАЛОГ</h2>
        <div class="catalog_crumbs">
            <a href="categories.php">категории</a>
            <p>></p>
            <?php
            $category_sql = "SELECT * FROM categories WHERE id='$category_id'";
            $category_result = $conn->query($category_sql);
            if ($category_result->num_rows > 0) {
                $category = $category_result->fetch_assoc();
                echo '<a href="catalog.php?id=' . $category['id'] . '">' . $category['categories_name'] . '</a>';
            } else {
                echo "категория не найдена";
                exit;
            }
            ?>
        </div>
        <div class="catalog_block">
            <div class="catalog_cards">
                <?php
                $sql = "SELECT * FROM catalog WHERE parent_id='$category_id'";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="products.php?id=' . $row['id'] . '">';
                        echo '<div class="catalog_card">';
                        echo '<img src="' . $row['catalog_photo'] . '" alt="">';
                        echo '<h4>' . $row['catalog_name'] . '</h4>';
                        echo '</div>';
                        echo '</a>';
                    }
                } else {
                    echo "нет товаров в этой категории";
                }
                ?>
            </div>
        </div>
    </div>
    <!--------------- КАТАЛОГ --------------->

</body>

</html>

<?
$conn->close();
include ('includes/footer.php');
?>