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
                <li class="main-menu-item"><a href='../pages/catalog.php'>Каталог</a>
                    <ul class="submenu-category"> 
HERE;
if (!empty($link)) {
    $res1 = mysqli_query($link,"SELECT category_id,category_name FROM catalog_view GROUP BY 1 ORDER BY 1");
    while ($row1 = mysqli_fetch_array($res1)){
        echo "<li class='submenu-category-item'><a href='../pages/catalog.php?id=".$row1['category_id']."'>".$row1['category_name']."</a><ul class='submenu-category-sublist'>";
    $res2 = mysqli_query($link,"SELECT subcategory_id,subcategory_name FROM catalog_view WHERE category_id=".$row1['category_id']." ORDER BY 1");
        while ($row2 = mysqli_fetch_array($res2)){
            echo"<li><a href='../pages/catalog.php?id=".$row1['category_id']."&sub_id=".$row2['subcategory_id']."'>".$row2['subcategory_name']."</a></li>";
        }
        echo"</ul></li>";
    }
}
?>
                    </ul>
                </li>
                <li class="main-menu-item">Акции</li>
                <li class="main-menu-item">Оплата и доставка</li>
                <li class="main-menu-item">Контакты</li>
            </ul>
        </nav>
        <div class="panel">
            <div class="panel-block" title="Корзина" style="background-image: url('../images/korz.svg')"></div>
            <div class="cart-form">
                <p>Корзина</p>
                <div class="cart-item">
                    <p><img src="../images/korz.svg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem, pariatur.</p>
                    <p>Цена</p>
                    <div class="cart-counter">
                        <div class="number">
                            <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                            <input type="number" min="1" value="1" readonly>
                            <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
                        </div>
                    </div>
                </div>
                <div class="cart-item">
                    <p><img src="../images/korz.svg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, provident.</p>
                    <p>999999 р.</p>
                    <div class="cart-counter">
                        <div class="number">
                            <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                            <input type="number" min="1" value="1" readonly>
                            <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
                        </div>
                    </div>
                </div>
                <div class="cart-buttons">
                    <button>Оформить</button>
                    <button>Очистить</button>
                </div>
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
