<?
include ('includes/connect.php');
include ('includes/header.php');

if (isset($_GET['id']) && isset($_GET['action'])) {
    $get_id = $_GET['id'];
    $action = $_GET['action'];

    if ($action == 'delete') {
        $delete_sql = "DELETE FROM catalog WHERE id='$get_id'";
        if ($conn->query($delete_sql) === TRUE) {
            header("Location: admin_catalog.php");
            exit;
        } else {
            echo "Ошибка при удалении товара: " . $conn->error;
        }
    } elseif ($action == 'cancel') {
        header("Location: catalog.php?id=" . $get_id);
        exit;
    }
}

$conn->close();
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

    <!--------------- УДАЛЕНИЕ КАТАЛОГА --------------->
    <div class="del container">
        <h2>УДАЛЕНИЕ КАТАЛОГА</h2>
        <h3>ВЫ ДЕЙСТВИТЕЛЬНО ХОТИТЕ УДАЛИТЬ КАТАЛОГ?</h3>
        <div class="action_del">
            <?php
            if (isset($_GET['id'])) {
                $get_id = $_GET['id'];
                echo '<a href="admin_catalog.php?id=' . $get_id . '&action=cancel" class="del_a_cancel">отменить</a>';
                echo '<p>/</p>';
                echo '<a href="del_catalog.php?id=' . $get_id . '&action=delete" class="del_a_delete">удалить</a>';
            } else {
                echo '<p>Товар не найден.</p>';
            }
            ?>
        </div>
    </div>
    <!--------------- УДАЛЕНИЕ КАТАЛОГА --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>