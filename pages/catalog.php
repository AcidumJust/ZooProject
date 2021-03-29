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
                <p>Категория 1
                    <ul>
                        <li>СубКатегория 1</li>
                        <li>СубКатегория 1</li>
                        <li>СубКатегория 1</li>
                        <li>СубКатегория 1</li>
                        <li>СубКатегория 1</li>
                    </ul>
                </p>
                <p>Категория 2
                    <ul>
                        <li>СубКатегория 2</li>
                        <li>СубКатегория 2</li>
                        <li>СубКатегория 2</li>
                        <li>СубКатегория 2</li>
                        <li>СубКатегория 2</li>
                    </ul>
                </p>
                <p>Категория 3</p>
                <ul>
                    <li>СубКатегория 3</li>
                    <li>СубКатегория 3</li>
                    <li>СубКатегория 3</li>
                    <li>СубКатегория 3</li>
                    <li>СубКатегория 3</li>
                </ul>
            </ul>
        </section>
        <section class="products-section">
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара</p></p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
        <div class="product-item">
            <img src="../images/popugai.png"/>
            <p>Название товара может быть длинным</p>
            <form>
                <button type="submit">Добавить</button>
            </form>
        </div>
    </section>
    </div>
</main>
<footer>
    <?php include_once ("../includes/footer.php");?>
</footer>
</body>
</html>