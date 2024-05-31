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

<body class="body_admin">

    <!--------------- КНОПКА ВВЕРХ --------------->
    <div class="to-up">
        <a href="#"><img src="assets/img/to-up/up.svg" alt=""></a>
    </div>
    <!--------------- КНОПКА ВВЕРХ --------------->

    <!--------------- ШАПКА --------------->
    <header class="header_admin">
        <div class="container">
            <div class="admin_head">
                <div class="admin_head_block">
                    <a href="index.php">
                        <h4>CHARLIE</h4>
                    </a>
                    <div class="admin_head_block_icons">
                        <div class="tooltip">
                            <a href="admin_users.php"><i class="fa-solid fa-user" style="color: #F2EEE9;"></i></a>
                            <span class="tooltiptext">пользователи</span>
                        </div>
                        <div class="tooltip">
                            <a href="admin_categories.php"><i class="fa-solid fa-list" style="color: #29231d;"></i></a>
                            <span class="tooltiptext">категории</span>
                        </div>
                        <div class="tooltip">
                            <a href="admin_catalog.php"><img src="assets/img/admin_head/icon_b.svg" alt=""></a>
                            <span class="tooltiptext">каталог</span>
                        </div>
                        <div class="tooltip">
                            <a href="admin_tovar.php"><i class="fa-solid fa-box" style="color: #29231d;"></i></a>
                            <span class="tooltiptext">товары</span>
                        </div>
                    </div>
                </div>
                <div class="admin_head_block1">
                    <div class="admin_head_block1_user">
                        <p>имя</p>
                        <p>фамилия</p>
                    </div>
                    <div class="admin_head_block1_foto"></div>
                </div>
            </div>
        </div>
    </header>
    <!--------------- ШАПКА --------------->

    <!--------------- АДМИН ПАНЕЛЬ ПОЛЬЗОВАТЕЛЕЙ --------------->
    <div class="admin_panel container">
        <div class="admin_pan_search">
            <h2>пользователи</h2>
            <div class="products_search">
                <form action="#" class="search-form">
                    <button type="submit" class="search-button">
                        <i class="fa-solid fa-magnifying-glass" style="color: #29231d;"></i>
                    </button>
                    <input type="text" placeholder="поиск" class="search-input">
                </form>
            </div>
        </div>

<??>

        <div class="admin_hd">
            <div>id</div>
            <div>фамилия</div>
            <div>имя</div>
            <div>телефон</div>
            <div>email</div>
        </div>
        <div class="admin_table">
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
                <div class="admin_btn_blok_mobail user_btn"><button><i class="fa-solid fa-user-minus"
                            style="color: #29231d;"></i></button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">1</div>
                <div class="user_lastn over-x">Иванов</div>
                <div class="user_name over-x">Иван</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">ivan@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
            <div class="user_row">
                <div class="user_id">2</div>
                <div class="user_lastn over-x">Петров</div>
                <div class="user_name over-x">Петр</div>
                <div class="user_phone over-y">8(456)644-64-46</div>
                <div class="user_email over-x">peter@mail.com</div>
                <div class="admin_btn_blok user_btn"><button>заблокировать</button></div>
            </div>
        </div>
    </div>
    <!--------------- АДМИН ПАНЕЛЬ ПОЛЬЗОВАТЕЛЕЙ --------------->

</body>

</html>