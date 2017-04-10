<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Агроусадьба Глыбов</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Агроусадьба Глыбов</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=services">
                Услуги
            </a>
            <a href="index.php?page=gallery">
                Галерея
            </a>
            <a href="index.php?page=contact">
                Контакты
            </a>
        </div>
    </div>
</header>

<div id="content">

    <?php
    $goods = [
        [
            'id' => 1,
            'name' => 'Ночлег',
            'desc' => 'Предлагаем ночлег, небольшая комната с двухместной кроватью. Рядом спуск к озеру.',
            'img' => '/images/goods/home.png',
            'price' => '30 р.'
        ],
        [
            'id' => 2,
            'name' => 'Лодки напрокат',
            'desc' => 'Сдаём напрокат лодки, удобный спуск к озеру прямо с участка. В наличии имеется 3 лодки.',
            'img' => '/images/goods/boat.png',
            'price' => '5 р.'
        ],
        [
            'id' => 3,
            'name' => 'Беседка, мангал, коптильня',
            'desc' => 'Уютная беседка в тени цветов на краю участка с красивым видом, мангал, заготовленные дрова.',
            'img' => '/images/goods/besedka.jpg',
            'price' => '10 р.'
        ],
    ];

    if (isset($_GET['page'])) $page = $_GET['page'];
    if (!isset($page)) {
        require('templates/main.php');
    } elseif ($page == 'services') {
        require('templates/services.php');
    } elseif ($page == 'product') {
        $id = $_GET['id'];
        $good = [];
        foreach ($goods as $product) {
            if ($product['id'] == $id) {
                $good = $product;
                break;
            }
        }
        require('templates/openedProduct.php');
    } elseif ($page == 'gallery') {
        require('templates/gallery.php');
    } elseif ($page == 'contact') {
        require('templates/contact.php');
    }
?>

</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                pkotyol@yandex.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                МТС:  +375 (29) 734-79-52
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                Life: +375 (25) 714-10-34
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                д. Глыбов, ул. Советская д.2
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=services">Услуги</a>
            <a href="index.php?page=gallery">Галерея</a>
            <a href="index.php?page=contact">Контакты</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Агроусадьба Глыбов</div>
    </div>
</footer>

</body>
</html>