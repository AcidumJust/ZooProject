<?php
require_once 'connection.php';
echo <<<HERE
<div class="header-container">
        <div class="h1-block">
            <h1>ЗооМагазин</h1>
        </div>
        <nav>
            <ul class="main-menu">
                <li class="main-menu-item">О компании</li>
                <li class="main-menu-item"><a>Каталог</a>
                    <ul class="submenu-category"> 
HERE;
    $link = mysqli_connect($host,$user,$password,$database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link,'utf8');
    $res = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1 DESC");
    while ($row = mysqli_fetch_array($res)){
        echo "<li class='submenu-category-item'><a href=''>".$row['category_name']."</a><ul class='submenu-category-sublist'><li><a>Товары1</a></li></ul></li>";
    }
    echo <<<HERE
<!--                        <li class="submenu-category-item"><a>Cat1</a>-->
<!--                            <ul class="submenu-category-sublist">-->
<!--                                <li><a>Товары1</a></li>-->
<!--                                <li><a>Товары2</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li class="submenu-category-item"><a>Cat2</a>-->
<!--                            <ul class="submenu-category-sublist">-->
<!--                                <li><a>Товары11</a></li>-->
<!--                                <li><a>Товары2</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                            </ul></li>-->
<!--                        <li class="submenu-category-item"><a>Cat3</a>-->
<!--                            <ul class="submenu-category-sublist">-->
<!--                                <li><a>Товары1</a></li>-->
<!--                                <li><a>Товары222</a></li>-->
<!--                                <li><a>Товары3</a></li>-->
<!--                            </ul></li>-->
<!--                        <li class="submenu-category-item"><a>Cat4</a>-->
<!--                            <ul class="submenu-category-sublist">-->
<!--                                <li><a>Товары1</a></li>-->
<!--                                <li><a>Товары2</a></li>-->
<!--                                <li><a>Товары333</a></li>-->
<!--                            </ul></li>-->
                    </ul>
                </li>
                <li class="main-menu-item">Акции</li>
                <li class="main-menu-item">Оплата и доставка</li>
                <li class="main-menu-item">Контакты</li>
            </ul>
        </nav>
        <div class="panel">
            <div class="panel-block" title="Корзина" style="background-image: url('../images/korz.svg')">
                <a href="../pages/index.php"></a>
            </div>
            <div id="lk" class="panel-block" title="Личный кабинет" style="background-image: url('../images/lk.svg')">
                <a href="#dialog-main-1"></a>
            </div>
        </div>
    </div>
    <div class="search-block">
        <input type="text" class="search-input" placeholder="Найди меня...">
        <button class="search-button"></button>
    </div>
HERE;