<?php
require_once "connection.php";

function add_to_cart(object $conn, int $ID_cart, int $ID_prod){
    $res = mysqli_query($conn, "SELECT count FROM cart_products WHERE cart_id=".$ID_cart." AND product_id=".$ID_prod);
    $count = 1;
    if(mysqli_num_rows($res)==1) {
        $count = (mysqli_fetch_array($res))['count'] + 1;
        mysqli_query($conn,"UPDATE cart_products SET count = ".$count." WHERE cart_id=".$ID_cart." AND product_id=".$ID_prod);
    }
    mysqli_query($conn,"INSERT INTO cart_products(cart_id, product_id, count) VALUE (".$ID_cart.",".$ID_prod.",".$count.")");
}

if (isset($link) && isset($_POST['btn_add'])) {
    add_to_cart($link, $_COOKIE['ID_cart'], $_POST['btn_add']);
}

echo "<script>window.close();</script>";