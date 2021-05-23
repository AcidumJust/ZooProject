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
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../styles/basic.css">
    <link rel="stylesheet" href="../styles/lk_page.css">
    <?php require ("../includes/connection.php")?>
</head>
<body>
<!--Всплывающее окно входа-->
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
        <p align="center">Личный кабинет</p>
            <label>Логин:</label>
            <input type="text" name="reg_login" placeholder="Login" value="$row[0]">
            <label>Фамилия:</label>
            <input tye=p"text" name="reg_fam" placeholder="Фамилия" value="$row[3]">
            <label>Имя:</label>
            <input type="text" name="reg_name" placeholder="Имя" value="$row[2]">
            <label>Адрес:</label>
            <input type="text" name="reg_adress" placeholder="Адрес" value="$row[5]">
            <label>E-mail:</label>
            <input type="email" name="reg_email" placeholder="E-mail" value="$row[4]">
            <label>Телефон:</label>
            <input type="tel" name="reg_tel" placeholder="Телефон" value="$row[6]">
            <label>Пароль:</label>
            <input type="password" name="reg_pass1" placeholder="Password" value="$row[1]">
            <button formmethod="post" name="save" formaction="#">Сохранить</button>
            <button name="not" formmethod="post" formaction="#">Отмена</a></button>
        </form>
        HERE;
        }
        else echo "Ошибка";
        ?>
    </section>
</main>
<footer>
    <?php require_once ("../includes/footer.php");?>
</footer>
</body>
</html>