<?php
require "connection.php";
echo <<<HERE
<div class="bottom-container">
    <div class="bottom-catalog">
        <p><a href='../pages/catalog.php'>Каталог</a></p>
HERE;
if (!empty($link)) {
    $res = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1");
    while ($row = mysqli_fetch_array($res)){
        echo "<a href='../pages/catalog.php?id=".$row['category_id']."'>".$row['category_name']."</a>";
    }
}
echo <<<HERE
    </div>
    <div class="bottom-about">
        <p>О компании</p>
        <a href="index.php">О нас</a>
    </div>
    <div class="bottom-info">
        <p>Информация</p>
        <a href="index.php">Акции</a>
        <a href="index.php">Доставка и оплата</a>
    </div>
</div>
HERE;
