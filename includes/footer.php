<?php
require "connection.php";
echo <<<HERE
<div class="bottom-container">
    <div class="bottom-catalog">
        <p>Каталог</p>
HERE;
    $link = mysqli_connect($host,$user,$password,$database) or die("Error".mysqli_error($link));
    mysqli_set_charset($link,'utf8');
    $res = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1 DESC");
    while ($row = mysqli_fetch_array($res)){
        echo "<a href=''>".$row['category_name']."</a>";
    }
echo <<<HERE
<!--        <a href="">Собаки</a>-->
<!--        <a href="">Кошки</a>-->
<!--        <a href="">Птицы</a>-->
<!--        <a href="">Грызуны</a>-->
<!--        <a href="">Рыбы</a>-->
    </div>
    <div class="bottom-about">
        <p>О компании</p>
        <a href="">О нас</a>
    </div>
    <div class="bottom-info">
        <p>Информация</p>
        <a href="">Акции</a>
        <a href="">Доставка и оплата</a>
    </div>
</div>
HERE;
