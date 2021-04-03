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
if (!empty($link)) {
    $res = mysqli_query($link,"SELECT * FROM catalog_view ORDER BY 1");

    while ($row = mysqli_fetch_array($res)){
        echo "<li class='submenu-category-item'><a href=''>".$row['category_name']."</a><ul class='submenu-category-sublist'><li><a>Товары1</a></li></ul></li>";
    }
}
echo <<<HERE
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