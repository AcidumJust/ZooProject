<?php
require "connection.php";
echo <<<HERE
<div class="bottom-container">
    <div class="bottom-catalog">
        <p>Каталог</p>
HERE;
if (!empty($link)) {
    $res = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1 DESC");
    while ($row = mysqli_fetch_array($res)){
        echo "<a href=''>".$row['category_name']."</a>";
    }
}
echo <<<HERE
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
