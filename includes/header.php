<!--------------- ШАПКА --------------->
<header>
    <div class="container">
        <div class="menu">
            <input type="checkbox" id="burger-checkbox" class="burger-checkbox">
            <label for="burger-checkbox" class="burger"></label>
            <ul class="menu-list">
                <div class="menu_nav">
                    <li><a href="index.php" class="menu-item">главная</a>
                    <li>
                    <li><a href="categories.php" class="menu-item">категории</a>
                    <li>
                    <li><a href="#contact" class="menu-item">контакты</a>
                    <li>
                </div>
                <div class="menu_icons">
                    <li><a href="favourites.php"><i class="fa-regular fa-heart" style="color: #F2EEE9;"></i></a>
                    <li>
                    <li><a href="basket.php"><img src="assets/img/header_basket.svg" alt=""></a>
                    <li>
                    <li><a href="login_up.php"><i class="fa-regular fa-user" style="color: #F2EEE9;"></i></a>
                    <li>
                </div>
            </ul>
        </div>


        <script class="script_head">
            document.addEventListener('DOMContentLoaded', () => {
                const burgerCheckbox = document.getElementById('burger-checkbox');
                const menuList = document.querySelector('.menu-list');

                burgerCheckbox.addEventListener('change', () => {
                    if (burgerCheckbox.checked) {
                        menuList.classList.add('menu-list--visible');
                    } else {
                        menuList.classList.remove('menu-list--visible');
                    }
                });
            });
        </script>


        <div class="head_mobile">
            <ul class="menu-lists">
                <div class="menu_nav">
                    <a href="index.php" class="menu-item">главная</a>
                    <a href="categories.php" class="menu-item">категории</a>
                    <a href="#contact" class="menu-item">контакты</a>
                </div>
                <div class="menu_icons">
                    <li><a href="favourites.php"><i class="fa-regular fa-heart" style="color: #F2EEE9;"></i></a>
                    <li>
                    <li><a href="basket.php"><img src="assets/img/header_basket.svg" alt=""></a>
                    <li>
                    <li><a href="login_up.php"><i class="fa-regular fa-user" style="color: #F2EEE9;"></i></a>
                    <li>
                </div>
            </ul>
        </div>
    </div>
</header>
<!--------------- ШАПКА --------------->