<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/catalog.css">
    <link rel="stylesheet" href="../styles/basic.css">
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
    <div class="products">
        <section class="catalog-section">
            <p>Каталог</p>
            <ul class="catalog-block">
                <?php
                if (!empty($link)) {
                    $res1 = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1");
                    while ($row1 = mysqli_fetch_array($res1)){
                        echo "<li><a class='category-name' href='../pages/catalog.php?id=".$row1['category_id']."'>".$row1['category_name']."</a></li>";
                    }
                }
                ?>
            </ul>
        </section>
        <section class="products-section">
            <?php
            $count = 0;
            $param1 = "";
            $param2 = "";
            if(isset($_GET['id'])){
                $param1 = " AND a.category_id=".$_GET['id'];
                if(isset($_GET['sub_id']))
                    $param2 = " AND a.subcategory_id=".$_GET['sub_id'];
            }
            if (!empty($link)){
                $res1 = mysqli_query($link,"SELECT * FROM product_catalog_tbl AS a, product WHERE product.product_id=a.product_id".$param1.$param2." GROUP BY a.product_id");
                while ($row1 = mysqli_fetch_array($res1)){
                    if($row1['product_id']!=1){ //пропуск заглушки
                        $count+=1;
                        echo '<a class="product-item" href="">
                                   <img src="../images/img_products/'.$row1['product_image'].'.png"/>';
                        echo '<p class="product-name">'.$row1['product_name'].'</p>';
                        echo '<p class="product-price">'.$row1['product_price'].' руб.</p>';
                        echo '<form><button type="submit">Добавить</button></form></a>';
                    }
                }
            } if($count == 0) echo "<p>Упс, кажется здесь ничего нет</p>";?>
    </section>
    </div>
</main>
<footer>
    <?php include_once ("../includes/footer.php");?>
</footer>
</body>
</html>