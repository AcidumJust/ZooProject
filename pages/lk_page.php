<?php
include_once ('../includes/connection.php');
    if(session_status()!=2)
        session_start();
    if(!isset($_SESSION["status"]) || !$_SESSION["status"]) {
        $_SESSION["status"] = false;
        if (isset($_POST["login"]) && isset($_POST["pass"])) {
            if (!empty($link)) {
                $res1 = mysqli_query($link, "SELECT * FROM client WHERE client_login='" .$_POST["login"] . "' AND client_password='" . $_POST["pass"] . "'");
                if (mysqli_num_rows($res1) == 1) {
                    $_SESSION["status"] = true;
                    $_SESSION["login"] = $_POST["login"];
                    echo $_SESSION["login"];
                }
            }
        }
    }
    if(isset($_POST["save"])){
        mysqli_query($link,"UPDATE client SET 
                  client_login='".$_POST["reg_login"]."',
                   client_fam='".$_POST["reg_fam"]."',
                   client_name='".$_POST["reg_name"]."',
                   client_adress='".$_POST["reg_adress"]."',
                   client_email='".$_POST["reg_email"]."',
                   client_tel='".$_POST["reg_tel"]."',
                   client_password='".$_POST["reg_pass1"]."' WHERE client_login='".$_SESSION["login"]."'");
    }
    if(isset($_POST["order"])){
        if (!empty($link)) {
            $res1 = mysqli_query($link, "SELECT * FROM cart_products WHERE cart_id=".$_COOKIE["ID_cart"]);
            if (mysqli_num_rows($res1) > 0) {
                mysqli_query($link,"INSERT INTO order_tbl(client_login, order_datetime, order_pay) VALUE ('".$_SESSION["login"]."','".date('Y-m-d h:i:s', time())."','1')");
                $id=mysqli_query($link,"SELECT MAX(order_id) as id FROM order_tbl WHERE client_login='".$_SESSION["login"]."'");
                $id=mysqli_fetch_array($id);
                while ($row1=mysqli_fetch_array($res1)){
                    mysqli_query($link, "INSERT INTO order_product(order_id, product_id, product_count) VALUE (".$id['id'].",".$row1['product_id'].",".$row1['count'].")");
                }
                mysqli_query($link, "DELETE FROM cart_products WHERE cart_id=".$_COOKIE["ID_cart"]);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>???????????? ??????????????</title>
    <link rel="stylesheet" href="../styles/basic.css">
    <link rel="stylesheet" href="../styles/lk_page.css">
    <?php require ("../includes/connection.php")?>
</head>
<body>
<!--?????????????????????? ???????? ??????????-->
<?php require_once ("../includes/dialog_windows.php");?>
<!--    -->
<header>
    <?php require_once ("../includes/header.php");?>
</header>
<main>
    <section class="lk-section">
        <?php
        if($_SESSION["status"]) {
            $res1 = mysqli_query($link, "SELECT * FROM client WHERE client_login='".$_SESSION["login"]."'");
            $row = mysqli_fetch_array($res1);
            echo <<<HERE
        <form class="lk_form">
        <p align="center">???????????? ??????????????</p>
            <label>??????????:</label>
            <input type="text" name="reg_login" placeholder="Login" value="$row[0]">
            <label>??????????????:</label>
            <input tye=p"text" name="reg_fam" placeholder="??????????????" value="$row[3]">
            <label>??????:</label>
            <input type="text" name="reg_name" placeholder="??????" value="$row[2]">
            <label>??????????:</label>
            <input type="text" name="reg_adress" placeholder="??????????" value="$row[5]">
            <label>E-mail:</label>
            <input type="email" name="reg_email" placeholder="E-mail" value="$row[4]">
            <label>??????????????:</label>
            <input type="tel" name="reg_tel" placeholder="??????????????" value="$row[6]">
            <label>????????????:</label>
            <input type="password" name="reg_pass1" placeholder="Password" value="$row[1]">
            <button formmethod="post" name="save" formaction="#">??????????????????</button>
            <button name="not" formmethod="post" formaction="#">????????????</a></button>
        </form>
        HERE;
        }
        else echo "????????????";
        ?>
    </section>
    <section class="order">

    </section>
</main>
<footer>
    <?php require_once ("../includes/footer.php");?>
</footer>
</body>
</html>