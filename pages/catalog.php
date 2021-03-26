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
    <section class="products-section"></section>
</main>
<footer>
    <?php include_once ("../includes/footer.php");?>
</footer>
</body>
</html>