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

    <!--------------- КАТЕГОРИИ --------------->
    <div class="categories container">
        <h2>КАТЕГОРИИ</h2>
        <div class="categories_block">
            <div class="categories_cards">
                <?php
                $sql = "SELECT * FROM categories";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<a href="catalog.php?id=' . $row['id'] . '">';
                        echo '<div class="categories_card">';
                        echo '<img src="' . $row['categories_photo'] . '" alt="">';
                        echo '<h4>' . $row['categories_name'] . '</h4>';
                        echo '</div>';
                        echo '</a>';
                    }
                } else {
                    echo "нет доступных категорий";
                }
                ?>
            </div>
        </div>
    </div>
    <!--------------- КАТЕГОРИИ --------------->

</body>

</html>

<?
$conn->close();
include ('includes/footer.php');
?>