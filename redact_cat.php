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

    <!--------------- РЕДАКТИРОВАНИЕ КАТАЛОГА И КАТЕГОРИИ --------------->
    <div class="add_redact container">
        <h2>РЕДАКТИРОВАНИЕ</h2>
        <div class="add_redact_form">

            <?
            if (isset($_GET['id'])) {
                $get_id = $_GET['id'];
                $tovar_sql = "SELECT * FROM catalog WHERE id='$get_id'";
                $result = $conn->query($tovar_sql);
                $row = $result->fetch_assoc();


                if (isset($_GET['add_redact-edit'])) {
                    $name = $_POST['name'];
                    $photo = $_POST['photo'];

                    $tovar_sql = "UPDATE tovar SET
                                name = '$name',
                                photo = '$photo'
                                WHERE id='$get_id'";
                    $conn->query($tovar_sql);
                }

                ?>

            <form action="/add_product" method="POST" enctype="multipart/form-data" name="add_redact-edit">
                <div class="add_redact_form_block">
                    <div class="add_redact_block">
                        <label for="name">наименование</label><br>
                        <input type="text" id="name" name="name" value="<? $row['name'] ?>"><br>

                        <label for="photo">фото</label><br>
                        <input type="file" id="photo" name="photo" accept="image/*" value="<? $row['photo'] ?>"><br>
                    </div>
                </div>
                <input type="submit" value="редактировать" name="add_redact-edit">
            </form>
            <? } ?>
        </div>
    </div>
    <!--------------- РЕДАКТИРОВАНИЕ КАТАЛОГА И КАТЕГОРИИ --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>