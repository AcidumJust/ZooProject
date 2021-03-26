<?php
echo <<<HERE
<div id="dialog-main-1" class="dialog-main">
    <a class="back" href="#"></a>
    <div id="enter-window"><p>Авторизация</p>
        <form>
            <label>Логин:</label>
            <input type="text" placeholder="Login">
            <label>Пароль:</label>
            <input type="password" placeholder="Password">
            <button><a href="index.php">Войти</a></button>
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
            <input type="text" placeholder="Login">
            <label>Фамилия:</label>
            <input type="text" placeholder="Фамилия">
            <label>Имя:</label>
            <input type="text" placeholder="Имя">
            <label>Адрес:</label>
            <input type="text" placeholder="Адрес">
            <label>E-mail:</label>
            <input type="email" placeholder="E-mail">
            <label>Телефон:</label>
            <input type="tel" placeholder="Телефон">
            <label>Пароль:</label>
            <input type="password" placeholder="Password">
            <label>Повторите пароль:</label>
            <input type="password" placeholder="Password">
            <button><a href="index.php">Зарегистироваться</a></button>
            <button><a href="#dialog-main-1">Назад</a></button>
        </form>
    </div>
</div>
HERE;
