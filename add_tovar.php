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

    <!--------------- ДОБАВЛЕНИЕ ТОВАРА --------------->
    <div class="add_redact container">
        <h2>ДОБАВЛЕНИЕ</h2>
        <div class="add_redact_form">

            <?php
            $category_sql = "SELECT * FROM catalog";
            $category_result = $conn->query($category_sql);

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_redact-add'])) {
                $name = $_POST['name'];
                $size = $_POST['size'];
                $description = $_POST['description'];
                $color = $_POST['color'];
                $price = $_POST['price'];
                $photo = '';
                $category = $_POST['category'];

                if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                    $photo_tmp = $_FILES['photo']['tmp_name'];
                    $photo_name = basename($_FILES['photo']['name']);
                    $photo_dir = 'assets/img/products/' . $photo_name;

                    if (move_uploaded_file($photo_tmp, $photo_dir)) {
                        $photo = $photo_dir;
                    }
                }

                $insert = "INSERT INTO tovar (name, size, description, color, price, tovar_foto, parent_id)
               VALUES ('$name', '$size', '$description', '$color', '$price', '$photo', '$category')";
                if ($conn->query($insert) === TRUE) {
                    header("Location: categories.php");
                    exit;
                } else {
                    echo "Error: " . $conn->error;
                }
            }
            ?>

            <form action="" method="POST" enctype="multipart/form-data" name="add_redact-add">
                <div class="add_redact_form_block">
                    <div class="add_redact_block">
                        <label for="name">наименование</label><br>
                        <input type="text" id="name" name="name"><br>

                        <label for="size">размер/вес</label><br>
                        <input type="text" id="size" name="size"><br>

                        <label for="description">описание</label><br>
                        <textarea id="description" name="description"></textarea><br>
                    </div>
                    <div class="add_redact_block">
                        <label for="color">цвет</label><br>
                        <input type="color" id="color" name="color"><br>

                        <label for="price">стоимость</label><br>
                        <input type="number" id="price" name="price"><br>

                        <label for="photo">фото</label><br>
                        <input type="file" id="photo" name="photo" accept="image/*"><br>

                        <label for="category">каталог</label><br>
                        <select name="category" id="category" required>
                            <?php
                            if ($category_result->num_rows > 0) {
                                while ($row = $category_result->fetch_assoc()) {
                                    echo '<option value="' . $row["id"] . '">' . $row["catalog_name"] . '</option>';
                                }
                            } else {
                                echo '<option value="">нет доступных категорий</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <input type="submit" value="добавить" name="add_redact-add">
            </form>

        </div>
    </div>
    <!--------------- ДОБАВЛЕНИЕ ТОВАРА --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>