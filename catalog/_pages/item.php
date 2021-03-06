<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Карточка товара</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css" media="screen, projection, print">

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div class = "wrapper">
            <div class = "maincontent">
                <div class="container">
                    <?
                        require_once('_common/header.php');
                    ?>
                    <section class="nav_main">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="nav_link_wrap">
                                        <div class="nav_link_triangle">
                                            <div class="nav_link_outer">
                                                <div class="nav_link_inner">
                                                    <span>о компании</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav_link_wrap">
                                        <div class="nav_link_triangle">
                                            <div class="nav_link_outer">
                                                <div class="nav_link_inner">
                                                    <span>новости</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav_link_wrap">
                                        <div class="nav_link_triangle">
                                            <div class="nav_link_outer">
                                                <div class="nav_link_inner">
                                                    <span>клиентам</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav_link_wrap">
                                        <div class="nav_link_triangle">
                                            <div class="nav_link_outer">
                                                <div class="nav_link_inner">
                                                    <span>Рекламная поддержка</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav_link_wrap">
                                        <div class="nav_link_triangle">
                                            <div class="nav_link_outer">
                                                <div class="nav_link_inner">
                                                    <span>Контакты</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="search">
                                <form action="">
                                    <div class="search_input_wrap">
                                        <div class="input_text">
                                            <div class="input_text_wrap">
                                                <input type="text" placeholder="Поиск по каталогу">
                                            </div>
                                        </div>
                                        <input class="search_ico" value="" type="submit">
                                    </div>
                                    <input class="search_submit" type="submit" value="">
                                </form>
                            </div>
                        </nav>
                    </section>
                    <div class="content_area">
                        <div class="content_area_right">
                            <section class="categories accordeon">
                                <div class="categories_title">Продукция</div>
                                <ul class="categories_list accordeon_list">
                                    <li>
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Бытовая техника</span>
                                                </a>
                                            </div>
                                            <ul class="categories_item_sublist accordeon_content">
                                                <li class="with_popup">
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                    <div class="categories_sublist_popup">
                                                        <div class="categories_popup_inner">
                                                            <ul class="categories_popup_list">
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>чайники</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="categories_popup_close" href="#"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для дома</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для индивидуального ухода</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Посуда</span>
                                                </a>
                                            </div>
                                            <ul class="categories_item_sublist accordeon_content">
                                                <li class="with_popup">
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                    <div class="categories_sublist_popup">
                                                        <div class="categories_popup_inner">
                                                            <ul class="categories_popup_list">
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>чайники</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="categories_popup_close" href="#"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Предметы интерьера</span>
                                                </a>
                                            </div>
                                            <ul class="categories_item_sublist accordeon_content">
                                                <li class="with_popup">
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                    <div class="categories_sublist_popup">
                                                        <div class="categories_popup_inner">
                                                            <ul class="categories_popup_list">
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>чайники</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="categories_popup_close" href="#"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="non_subcategories">
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Климатическое оборудование</span>
                                                </a>
                                                <span class="categories_sublist_counter">14</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Инструмент и оборудование</span>
                                                </a>
                                            </div>
                                            <ul class="categories_item_sublist accordeon_content">
                                                <li class="with_popup">
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                    <div class="categories_sublist_popup">
                                                        <div class="categories_popup_inner">
                                                            <ul class="categories_popup_list">
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>чайники</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="categories_popup_close" href="#"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="categories_list_item">
                                            <div class="categories_item_title">
                                                <a href="#">
                                                    <span>Садово-огородный инвентарь</span>
                                                </a>
                                            </div>
                                            <ul class="categories_item_sublist accordeon_content">
                                                <li class="with_popup">
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                    <div class="categories_sublist_popup">
                                                        <div class="categories_popup_inner">
                                                            <ul class="categories_popup_list">
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>чайники</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="categories_sublist_inner">
                                                                        <a class="categories_inner_title" href="#">
                                                                            <span>термопоты</span>
                                                                        </a>
                                                                        <span class="categories_sublist_counter">14</span>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <a class="categories_popup_close" href="#"></a>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="categories_sublist_inner">
                                                        <a class="categories_inner_title" href="#">
                                                            <span>Для кухни</span>
                                                        </a>
                                                        <span class="categories_sublist_counter">14</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </section>
                            <section class="features_sale">
                                <div class="feautures_green_back"></div>
                                <div class="feautures_sale_product">
                                    <img src="../img/content/holy_meat_destroyer.png" alt="">
                                </div>
                                <div class="feautures_sale_mask"></div>
                                <div class="feautures_sale_descript">
                                    <a href="#">Сезонная распродажа техники для кухни</a>
                                </div>
                                <div class="feautures_sale_stripe"></div>
                            </section>
                        </div>
                        <div class="content_area_left">
                            <section class="breadcrumbs">
                                <ul>
                                    <li>
                                        <a href="#">Главная</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Продукция</a>
                                    </li>
                                </ul>
                            </section>
                            <section class="h1">Аэрогриль DL-6003B</section>
                            <section class="item">
                                <div class="item_left">
                                    <div class="item_card_view">
                                        <div class="category_list_show">
                                            <a href="#fancy" class="category_show_full">
                                                <div class="category_full_wrap">
                                                    <img src="../img/content/big_executor.png" alt=""/>
                                                </div>
                                                <div class="category_full_mask"></div>
                                            </a>
                                            <div class="category_show_mini">
                                                <ul class="category_mini_list">
                                                    <li>
                                                        <a class="category_mini_item" href="#">
                                                            <div class="category_mini_wrap">
                                                                <img src="../img/content/vegetable_exterminator.png" alt=""/>
                                                            </div>
                                                            <div class="category_mini_mask"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="category_mini_item" href="#">
                                                            <div class="category_mini_wrap">
                                                                <img src="../img/content/vegetable_exterminator.png" alt=""/>
                                                            </div>
                                                            <div class="category_mini_mask"></div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="category_mini_item" href="#">
                                                            <div class="category_mini_wrap">
                                                                <img src="../img/content/vegetable_exterminator.png" alt=""/>
                                                            </div>
                                                            <div class="category_mini_mask"></div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="category_order_rating">
                                        <div class="category_rating_title">На складе:</div>
                                        <ul class="category_rating_count">
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                            <li class="filled"></li>
                                        </ul>
                                        <div class="category_rating_amount"></div>
                                    </div>
                                </div>
                                <div class="item_right">
                                    <div class="item_options">
                                        <div class="item_colors">
                                            <div class="item_colors_title">Цвет:</div>
                                            <ul class="item_colors_list">
                                                <li class="white ">
                                                    <a href="../img/content/vegetable_exterminator.png">
                                                        <span></span>
                                                    </a>
                                                </li>
                                                <li class="black active">
                                                    <a href="../img/content/vegetable_exterminator.png">
                                                        <span></span>
                                                    </a>
                                                </li>
                                                <li class="orange">
                                                    <a href="../img/content/vegetable_exterminator.png">
                                                        <span></span>
                                                    </a>
                                                </li>
                                                <li class="grey">
                                                    <a href="../img/content/vegetable_exterminator.png">
                                                        <span></span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <ul class="item_counts">
                                            <li>
                                                <div class="item_counts_price">
                                                    цена за 1 штуку: <span class="cart_counter">5204</span> руб.
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item_counts_code">
                                                    Код товара: <span>440-076</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="item_counts_amount">
                                                    Количество в упаковке: <span>6</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="category_buy_counter">
                                            <form action="">
                                                <div class="text_input">
                                                    <div class="text_input_wrap">
                                                        <input class="category_count_input" type="text"/>
                                                    </div>
                                                </div>

                                                <a href="#" class="category_count_button">В корзину</a>
                                                <input class="category_count_submit" type="submit"/>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="item_properties">
                                        <ul class="item_prop_list">
                                            <li>
                                                <div class="item_prop_title">Параметры</div>
                                                <ul class="item_prop_options">
                                                    <li>
                                                        <span class="item_option_title">Вес</span>
                                                        <span class="item_options_content">5 кг</span>
                                                    </li>
                                                    <li>
                                                        <span class="item_option_title">Габариты</span>
                                                        <span class="item_options_content">120х30х150 мм</span>
                                                    </li>
                                                    <li>
                                                        <span class="item_option_title">Рабочий объем колбы</span>
                                                        <span class="item_options_content">12 л</span>
                                                    </li>
                                                    <li>
                                                        <span class="item_option_title">Максимальная можность</span>
                                                        <span class="item_options_content">400 Вт</span>
                                                    </li>
                                                    <li>
                                                        <span class="item_option_title">Электропитание</span>
                                                        <span class="item_options_content">220 В, 50 Гц</span>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="item_prop_title">Описание</div>
                                                <ul class="item_prop_options">
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Автоматическое включение и отключение при опускании и поднятии крышки
                                                    </li>
                                                    <li>
                                                        Электронная панель управления
                                                    </li>
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="item_prop_title">Аксессуары</div>
                                                <ul class="item_prop_options">
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Колба-духовка из жаропрочного стекла
                                                    </li>
                                                    <li>
                                                        Электронная панель управления
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <section class="carousel">
                        <div class="carousel_wrap">
                            <ul>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo1.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo2.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo3.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo1.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo2.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo3.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo1.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo2.jpg" alt=""/>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="carousel_img_wrap">
                                        <img src="../img/content/logo3.jpg" alt=""/>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="carousel_controls">
                            <a href="#" class="carousel_control_left"></a>
                            <a href="#" class="carousel_control_right"></a>
                        </div>
                    </section>
                </div> <!-- container -->
            </div> <!-- maincontent -->
            <div class = "empty"></div>
        </div> <!-- wrapper -->


        <ul class="list">
            <li class="list__item">
                <img class="list__item-img" src="" alt=""/>
            </li>
            <li class="list__item">
                <img class="list__item-img" src="" alt=""/>
            </li>
            <li class="list__item">
                <img class="list__item-img" src="" alt=""/>
            </li>
        </ul>


        <!-- FOOTER HERE -->

        <?
            require_once('_common/footer.php');
        ?>

        <div id="fancy" class="fancypop">
            <div class="fancypop_inner">
                <div class="fancy_title">
                    Соковыжималка DL-0228
                </div>
                <div class="fancy_show">
                    <div class="category_list_show">
                        <div class="category_show_full">
                            <div class="category_full_wrap">
                                <img src="../img/content/coffee_maker.png" alt=""/>
                            </div>
                            <div class="category_full_mask"></div>
                        </div>
                        <div class="category_show_mini">
                            <ul class="category_mini_list">
                                <li>
                                    <a class="category_mini_item" href="#">
                                        <div class="category_mini_wrap">
                                            <img src="../img/content/big_executor.png" alt=""/>
                                        </div>
                                        <div class="category_mini_mask"></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="category_mini_item" href="#">
                                        <div class="category_mini_wrap">
                                            <img src="../img/content/meat_destroyer.png" alt=""/>
                                        </div>
                                        <div class="category_mini_mask"></div>
                                    </a>
                                </li>
                                <li>
                                    <a class="category_mini_item" href="#">
                                        <div class="category_mini_wrap">
                                            <img src="../img/content/teapot.png" alt=""/>
                                        </div>
                                        <div class="category_mini_mask"></div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="fancy_show_controls">
                        <a class="fancy_show_next" href="#">Следующая</a>
                        <a class="fancy_show_prev" href="#">Предыдущая</a>
                    </div>
                    <a class="fancy_close" href="#">закрыть</a>
                </div>
            </div>
        </div>

        <?
            require_once('_common/scripts.php');
        ?>

    </body>
</html>
