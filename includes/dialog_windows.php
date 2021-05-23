<?php
include_once ('connection.php');
if(isset($_POST['reg']))
    if(!empty($_POST['reg_login'])&&!empty($_POST['reg_fam'])&&!empty($_POST['reg_name'])&&!empty($_POST['reg_adress'])&&!empty($_POST['reg_email'])&&!empty($_POST['reg_tel'])&&!empty($_POST['reg_pass1'])&&!empty($_POST['reg_pass2'])){
        $query="INSERT INTO client VALUE ('".$_POST['reg_login']."','".$_POST['reg_name']."','".$_POST['reg_fam']."','".$_POST['reg_pass1']."','".$_POST['reg_email']."','".$_POST['reg_adress']."','".$_POST['reg_tel']."')";
        if(isset($link)){
            mysqli_query($link,$query);
        }
    }
echo <<<HERE
<div id="dialog-main-1" class="dialog-main">
    <a class="back" href="#"></a>
    <div id="enter-window"><p>Авторизация</p>
        <form>
            <label>Логин:</label>
            <input type="text" name="login" placeholder="Login">
            <label>Пароль:</label>
            <input type="password" name="pass" placeholder="Password">
            <button formmethod="post" formaction="../pages/lk_page.php">Войти</button>
            <button><a href="#dialog-main-2">Зарегистироваться</a></button>
        </form>
    </div>
</div>
<div id="dialog-main-2" class="dialog-main">
    <a class="back" href="#"></a>
    <div id="registration-window">
        <p>Регистрация</p>
        <form>
            <label>Придумайте логин:</label>
            <input type="text" name="reg_login" placeholder="Login">
            <label>Фамилия:</label>
            <input tye=p"text" name="reg_fam" placeholder="Фамилия">
            <label>Имя:</label>
            <input type="text" name="reg_name" placeholder="Имя">
            <label>Адрес:</label>
            <input type="text" name="reg_adress" placeholder="Адрес">
            <label>E-mail:</label>
            <input type="email" name="reg_email" placeholder="E-mail">
            <label>Телефон:</label>
            <input type="tel" name="reg_tel" placeholder="Телефон">
            <label>Пароль:</label>
            <input type="password" name="reg_pass1" placeholder="Password">
            <label>Повторите пароль:</label>
            <input type="password" name="reg_pass2" placeholder="Password">
            <button formmethod="post" name="reg" formaction="#">Зарегистироваться</button>
            <button><a href="#dialog-main-1">Назад</a></button>
        </form>
    </div>
</div>
HERE;
