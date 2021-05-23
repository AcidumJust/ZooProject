<?php
include_once ('../includes/connection.php');
if (!empty($link)) {
    if (isset($_GET['clear_cart'])) {
        mysqli_query($link, "DELETE FROM cart_products WHERE cart_id=" . $_COOKIE['ID_cart']);
    } else if (isset($_GET['del_1'])) {
        if ($_POST['val'] > 1) {
            mysqli_query($link, "UPDATE cart_products SET count=" . ($_POST['val'] - 1) . " WHERE cart_id=" . $_COOKIE['ID_cart'] . " AND product_id=" . $_POST['btn_min']);
        } else {
            mysqli_query($link, "DELETE FROM cart_products WHERE cart_id=" . $_COOKIE['ID_cart'] . " AND product_id=" . $_POST['btn_min']);
        }
    } else if (isset($_GET['add_1'])) {
        mysqli_query($link, "UPDATE cart_products SET count=" . ($_POST['val'] + 1) . " WHERE cart_id=" . $_COOKIE['ID_cart'] . " AND product_id=" . $_POST['btn_add']);
    } else if (isset($_GET['del_all'])) {
        mysqli_query($link, "DELETE FROM cart_products WHERE cart_id=" . $_COOKIE['ID_cart'] . " AND product_id=" . $_POST['btn_del_all']);
    }
}
?>

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
            <form>
                <h3>Корзина</h3>
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
                <button>Оформить заказ</button>
                <button formaction="./cart.php?clear_cart" formmethod="post">Очистить корзину</button>
            </form>
        </div>
    </section>
    <section class="cart-items">
        <?php
        if (!empty($link)) {
            $res1 = mysqli_query($link,"SELECT * FROM cart_products WHERE cart_id = ".$_COOKIE['ID_cart']." ORDER BY 1");
            if(mysqli_num_rows($res1)<1){
                echo "Корзина пуста";
            }
            while ($row1 = mysqli_fetch_array($res1)){
                $res2 = mysqli_query($link,"SELECT * FROM product WHERE product_id = ".$row1["product_id"]);
                $row2 = mysqli_fetch_array($res2);
                echo '
                <div class="item">
                    <img src="../images/img_products/ЖетонВоенныйЧерный.png">
                    <p>'.$row2["product_name"].'</p>
                    <form class="number">
                            <button class="number-minus" name="btn_min" value="'.$row1["product_id"].'" formaction="./cart.php?del_1" formmethod="post">-</button>
                            <input type="number" min="0" name="val" value="'.$row1["count"].'" readonly>
                            <button class="number-plus" name="btn_add" value="'.$row1["product_id"].'" formaction="./cart.php?add_1" formmethod="post">+</button>     
                    </form>
                    <form class="price">
                        <p>Цена: '.($row2["product_price"]*$row1["count"]).' руб.</p>
                        <button name="btn_del_all" value="'.$row1["product_id"].'" formaction="./cart.php?del_all" formmethod="post">Удалить</button>
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
<?php
?>
</body>
</html>