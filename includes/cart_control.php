<?php
include_once 'connection.php';
if(isset($link)) {
    if (isset($_COOKIE["ID_cart"]) && mysqli_num_rows(mysqli_query($link, "SELECT cart_id FROM cart WHERE cart_id=".$_COOKIE["ID_cart"]))==1) {
//        echo "Welcome " . $_COOKIE["ID_cart"] . "<br />";
        setcookie("ID_cart", $_COOKIE["ID_cart"], time() + (30 * 24 * 60 * 60), "/");
    } else {
        $res = mysqli_query($link, "SELECT MAX(cart_id) as cart_id FROM cart");
        $row = mysqli_fetch_array($res);
        $row['cart_id'] = $row['cart_id'] + 1;
        while (mysqli_query($link, "INSERT INTO cart(cart_id) VALUE (".($row["cart_id"]).")") != 1)
            $row['cart_id'] = $row['cart_id'] + 1;
        setcookie("ID_cart", $row['cart_id'], time() + (30 * 24 * 60 * 60), "/");
//        echo "Start " . $row['cart_id'] . "<br />";
    }
}
