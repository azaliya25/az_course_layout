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

    <!--------------- О НАС --------------->
    <div class="about_cont container pad-100">
        <h2>Добро пожаловать в наш<br> мир кондитеров!</h2>
        <div class="about_cont__info">
            <div class="about_cont__text1">
                <p>Мы не просто компания, это сообщество единомышленников, которые разделяют любовь к кондитерскому
                    искусству. Мы гордимся своими продуктами и готовы делиться своими знаниями и опытом с каждым, кто
                    разделяет нашу страсть к созданию великолепных десертов. Добро пожаловать в мир "Charlie" - мира
                    вкуса, креативности и радости от создания удивительных сладостей!
                </p>
                <img src="assets/img/about_cont/img1.svg" alt="">
            </div>
            <div class="about_cont__text2">
                <img src="assets/img/about_cont/img2.svg" alt="">
                <p>Мы предлагаем широкий ассортимент продукции высочайшего качества: от разнообразных форм для выпечки и
                    украшения до ингредиентов самых лучших производителей. <span>Мы постоянно следим за последними
                        тенденциями
                        в мире кондитерского искусства, чтобы предложить нашим клиентам самые современные и
                        инновационные
                        продукты.</span>
                    <br>
                    <br>
                    Наша команда состоит из опытных специалистов, которые готовы поддержать и помочь каждому кондитеру в
                    реализации его творческих идей. Мы ценим индивидуальный подход к каждому клиенту и стремимся к тому,
                    чтобы наши товары были доступными и качественными для всех профессионалов кондитерского дела.
                </p>
            </div>
        </div>
        <div class="about_cont__doc">
            <a href="">Свидетельство о государственной регистрации юридического лица.</a>
            <a href="">Лицензия на продажу продуктов питания.</a>
            <a href="">Условия использования и политика возврата товаров.</a>
        </div>
    </div>
    <!--------------- О НАС --------------->

</body>

</html>

<?
include ('includes/footer.php');
?>