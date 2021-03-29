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
                <?php
                $link = mysqli_connect($host,$user,$password,$database) or die("Error".mysqli_error($link));
                mysqli_set_charset($link,'utf8');
                $res = mysqli_query($link,"SELECT * FROM category WHERE category_name != 'Акции' ORDER BY 1 DESC");
                while ($row = mysqli_fetch_array($res)){
                    echo "<li><a class='category-name' href=''>".$row['category_name']."</a></li>";
                }
                ?>
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