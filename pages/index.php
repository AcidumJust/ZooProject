<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ЗооМагазин</title>
    <link rel="stylesheet" type="text/css" href="../styles/index.css">
    <link rel="stylesheet" href="../styles/basic.css">
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
    <section class="catalog-section">
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/dog.png')">
                <a>Собаки</a>
            </div>
        </div>
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/cat.png')">
                <a>Кошки</a>
            </div>
        </div>
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/popugai.png')">
                <a>Птицы</a>
            </div>
        </div>
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/homa.png')">
                <a>Грызуны</a>
            </div>
        </div>
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/fish.png')">
                <a>Рыбы</a>
            </div>
        </div>
        <div class="catalog-block">
            <div class="img-block" style="background-image: url('../images/action.png')">
                <a>Акции</a>
            </div>
        </div>
    </section>
    <section class="info-section">
        <div class="info-block">
            <img src="../images/ic1.svg">
            <p class="info-text-bold">99 магазинов</p>
            <p class="info-text">В республике Башкортостан и Татарстан.</p>
        </div>
        <div class="info-block">
            <img src="../images/ic2.svg">
            <p class="info-text-bold">Вет. консультации</p>
            <p class="info-text">Менеджеры и консультанты сети имеют ветеринарное образование.</p>
        </div>
        <div class="info-block">
            <img src="../images/ic3.svg">
            <p class="info-text-bold">Более 25 000 позиций</p>
            <p class="info-text">Корма, наполнители и многое другое в наличии.</p>
        </div>
        <div class="info-block">
            <img src="../images/ic4.svg">
            <p class="info-text-bold">Бесплатная доставка</p>
            <p class="info-text">В день обращения при покупке от 500 рублей.</p>
        </div>
        <div class="info-block">
            <img src="../images/ic5.svg">
            <p class="info-text-bold">Карта постоянного покупателя</p>
            <p class="info-text">Cкидка до 50% для постоянных покупателей.</p>
        </div>
        <div class="info-block">
            <img src="../images/ic6.svg">
            <p class="info-text-bold">Удобная оплата</p>
            <p class="info-text">Онлайн, наличными и при доставке курьеру.</p>
        </div>
    </section>
</main>
<footer>
    <?php require_once ("../includes/footer.php");?>
</footer>
</body>
</html>