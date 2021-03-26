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
                <li class="main-menu-item">Каталог</li>
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