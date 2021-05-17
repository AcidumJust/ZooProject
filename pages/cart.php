<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/basic.css">
    <link rel="stylesheet" href="../styles/cart.css">
    <title>Каталог</title>
</head>
<body>
<!--Всплывающее окно входа-->
<?php include_once ("../includes/dialog_windows.php");?>
<!--    -->
<header>
    <?php include_once ("../includes/header.php");?>
</header>
<main>
    <section class="cart-info">
        <div class="info">
            <h3>Корзина</h3>
            <p>Итого: 99999999 руб.</p>
            <button>Оформить заказ</button>
            <button>Очистить корзину</button>
        </div>
    </section>
    <section class="cart-items">
        <div class="item">
            <img src="../images/img_products/ЖетонВоенныйЧерный.png">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus!</p>
            <div class="number">
                <button class="number-minus" type="button" onclick="this.nextElementSibling.stepDown(); this.nextElementSibling.onchange();">-</button>
                <input type="number" min="0" value="1" readonly>
                <button class="number-plus" type="button" onclick="this.previousElementSibling.stepUp(); this.previousElementSibling.onchange();">+</button>
            </div>
            <div class="price">
                <p>Цена: 9999999 руб.</p>
                <button>Удалить</button>
            </div>
        </div>
    </section>
</main>
<footer>
    <?php include_once ("../includes/footer.php");?>
</footer>
<?php
?>
</body>
</html>
