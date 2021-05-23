<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Зазказ</title>
    <link rel="stylesheet" href="../styles/basic.css">
    <link rel="stylesheet" href="../styles/cart.css">
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
            <form>
                <h3>Зазказ</h3>
                <?php
                $sum=0;
                $res1 = mysqli_query($link,"SELECT * FROM cart_products WHERE cart_id = ".$_COOKIE['ID_cart']);
                while ($row1 = mysqli_fetch_array($res1)){
                    $res2 = mysqli_query($link,"SELECT product_price FROM product WHERE product_id = ".$row1["product_id"]);
                    $row2 = mysqli_fetch_array($res2);
                    $sum=$sum+$row1["count"]*$row2["product_price"];
                }
                ?>
                <p>Итого: <?php echo $sum;?> руб.</p>
                <?php if(isset($_SESSION["status"]) && $_SESSION["status"]) echo '<button name="order" formaction="lk_page.php" formmethod="post">Оформить заказ</button>';?>
            </form>
        </div>
    </section>
    <section class="cart-items">
        <?php
        if (!empty($link)) {
            $res1 = mysqli_query($link,"SELECT * FROM cart_products WHERE cart_id = ".$_COOKIE['ID_cart']." ORDER BY 1");
            if(mysqli_num_rows($res1)<1){
                echo "Заказ пуст";
            }
            while ($row1 = mysqli_fetch_array($res1)){
                $res2 = mysqli_query($link,"SELECT * FROM product WHERE product_id = ".$row1["product_id"]);
                $row2 = mysqli_fetch_array($res2);
                echo '
                <div class="item">
                    <img src="../images/img_products/'.$row2["product_image"].'.png">
                    <p>'.$row2["product_name"].'</p>
                    <form class="number">
                            <input type="number" min="0" name="val" value="'.$row1["count"].'" readonly>
                    </form>
                    <form class="price">
                        <p>Цена: '.($row2["product_price"]*$row1["count"]).' руб.</p>
                    </form>
                </div>
                ';
            }
        }
        ?>
    </section>
</main>
<footer>
    <?php include_once ("../includes/footer.php");?>
</footer>

</body>
</html>