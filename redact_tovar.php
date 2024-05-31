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
        <a href="index.html">
            <h1>CHARLIE</h1>
        </a>
    </div>
    <!--------------- ЛОГОТИП --------------->

    <!--------------- РЕДАКТИРОВАНИЕ ТОВАРА --------------->
    <div class="add_redact container">
        <h2>РЕДАКТИРОВАНИЕ</h2>
        <div class="add_redact_form">

            <?php
            if (isset($_GET['id'])) {
                $get_id = $_GET['id'];
                $tovar_sql = "SELECT * FROM tovar WHERE id='$get_id'";
                $result = $conn->query($tovar_sql);
                $row = $result->fetch_assoc();

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name = $_POST['name'];
                    $size = $_POST['size'];
                    $description = $_POST['description'];
                    $color = $_POST['color'];
                    $price = $_POST['price'];
                    $photo = $row['tovar_foto'];

                    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
                        $photo_tmp = $_FILES['photo']['tmp_name'];
                        $photo_name = basename($_FILES['photo']['name']);
                        $photo_dir = 'assets/img/products/' . $photo_name;

                        if (move_uploaded_file($photo_tmp, $photo_dir)) {
                            $photo = $photo_dir;
                        }
                    }

                    $tovar_sql = "UPDATE tovar SET
                                name = '$name',
                                size = '$size',
                                description = '$description',
                                color = '$color',
                                price = '$price',
                                tovar_foto = '$photo'
                                WHERE id='$get_id'";
                    if ($conn->query($tovar_sql) === TRUE) {
                        header("Location: tovar.php?id=" . $get_id);
                        exit;
                    } else {
                        echo "Error: " . $conn->error;
                    }
                }
                ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <div class="add_redact_form_block">
                    <div class="add_redact_block">
                        <label for="name">наименование</label><br>
                        <input type="text" id="name" name="name" value="<?= htmlspecialchars($row['name']) ?>"><br>

                        <label for="size">размер/вес</label><br>
                        <input type="text" id="size" name="size" value="<?= htmlspecialchars($row['size']) ?>"><br>

                        <label for="description">описание</label><br>
                        <textarea id="description"
                            name="description"><?= htmlspecialchars($row['description']) ?></textarea><br>
                    </div>
                    <div class="add_redact_block">
                        <label for="color">цвет</label><br>
                        <input type="color" id="color" name="color" value="<?= htmlspecialchars($row['color']) ?>"><br>

                        <label for="price">стоимость</label><br>
                        <input type="number" id="price" name="price" value="<?= htmlspecialchars($row['price']) ?>"><br>

                        <label for="photo">фото</label><br>
                        <input type="file" id="photo" name="photo" accept="image/*"><br>
                        <?php if (!empty($row['tovar_foto'])): ?>
                        <img src="<?= $row['tovar_foto'] ?>" alt="Фото товара" width="100">
                        <?php endif; ?>
                    </div>
                </div>
                <input type="submit" value="редактировать">
            </form>
            <?php } ?>
        </div>
    </div>
    <!--------------- РЕДАКТИРОВАНИЕ ТОВАРА --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>