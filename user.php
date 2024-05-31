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

    <!--------------- СТРАНИЦА ПОЛЬЗОВАТЕЛЯ --------------->
    <?php
    session_start();
    include ('includes/connect.php'); // не забудьте добавить подключение к базе данных
    
    if (!isset($_SESSION['user_id'])) {
        header("Location: login_up.php");
        exit();
    }

    $user_id = $_SESSION['user_id'];
    $sql = "SELECT * FROM users WHERE id = $user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='user container'>";
            echo "<h2>СТРАНИЦА ПОЛЬЗОВАТЕЛЯ</h2>";
            echo "<div class='user_info'>";
            echo "<div class='user_foto_btn'>";
            echo "<div class='user_foto'></div>";
            echo "<form action='logout.php' method='POST'>";
            echo "<button type='submit'>выход</button>";
            echo "</form>";
            echo "</div>";
            echo "<div class='user_form'>";
            echo "<form action='update-profile.php' method='POST'>";
            echo "<label for='last_name'>фамилия</label><br>";
            echo "<input type='text' id='last_name' name='last_name' value='" . $row['last_name'] . "'><br>";
            echo "<label for='first_name'>имя</label><br>";
            echo "<input type='text' id='first_name' name='first_name' value='" . $row['first_name'] . "'><br>";
            echo "<label for='phone'>номер телефона</label><br>";
            echo "<input type='tel' id='phone' name='phone' value='" . $row['phone'] . "'><br>";
            echo "<label for='email'>email</label><br>";
            echo "<input type='email' id='email' name='email' value='" . $row['email'] . "'><br>";
            echo "<label for='city'>город</label><br>";
            echo "<input type='text' id='city' name='city' value='" . $row['city'] . "'><br>";
            echo "<label for='postal_code'>почтовый индекс</label><br>";
            echo "<input type='text' id='postal_code' name='postal_code' value='" . $row['postal_code'] . "'><br>";
            echo "<div class='submit-button-container'>";
            echo "<input type='submit' value='сохранить'>";
            echo "</div>";
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "0 результатов";
    }

    $conn->close();
    ?>
    <!--------------- СТРАНИЦА ПОЛЬЗОВАТЕЛЯ --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>