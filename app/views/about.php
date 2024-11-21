<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="/public/src/css/index.css">
    <link rel="stylesheet" href="/public/src/css/header.css">
    <link rel="stylesheet" href="/public/src/css/footer.css">
    <link rel="stylesheet" href="/public/src/css/about.css">
    <link rel="stylesheet" href="/public/src/css/adapation_about.css">

    <title>Finstar</title>
</head>
<body>
<!-- Conntecting header -->
<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/header.php';
?>

<!-- Hero block -->
<div class="hero">
    <div class="page-nav">
        <span>Главная > <b>О компании</b></span>
    </div>

    <div class="container-hero">
        <div class="text">
            <span>Профессиональное управление инвестициями с 2005 года</span>
            <h2>ООО «Управляющая компания</h2>
            <h2>«Finstar»</h2>
        </div>

        <img src="/public/src/images/hero-logo.png" alt="Finstar">
    </div>
</div>

<!-- Advantages block -->
<div class="advantages">
    <div class="container-advantages">
        <div class="block">
                <h3>#1</h3>
            <span>12 паевых инвестиционных фондов в управлении</span>
        </div>
        <div class="block">
            <h3>#2</h3>
            <span>43,00 млрд ₽ — объем активов на 11.12.2023</span>
        </div>
        <div class="block">
            <h3>#3</h3>
            <span>Более 80 тысяч клиентов управляющей компании</span>
        </div>
    </div>
</div>

<!-- FAQ block -->
<div class="faq">
    <div class="container-faq">
        <div class="img">
            <img src="/public/src/images/handshake.png" alt="Finstar">
            <div class="dots">
                <div class="dot active"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>

        <div class="questions">
            <h1>Деятельность Управляющей компании</h1>
            <div class="block active">
                <span>Доверительное управление паевыми инвестиционными фондами</span>
            </div>
            <div class="block">
                <span>Доверительное управление пенсионными резервами и пенсионными накоплениями</span>
            </div>
            <div class="block">
                <span>Создание фонда под параметры вашего проекта</span>
            </div>
            <div class="block">
                <span>Доверительное управление активами целевых капиталов (эндаумент-фондов)</span>
            </div>
            <div class="block">
                <span>Доверительное управление компенсационными фондами СРО</span>
            </div>
            <div class="block">
                <span>Доверительное управление средствами жилищного обеспечения накопительно-ипотечной системы военнослужащих</span>
            </div>
        </div>
    </div>
</div>

<!-- Priorities block-->
<div class="priorities">
    <h2>Цель №1 — финансовое благополучие наших клиентов</h2>
    <p>Основная задача — предвидеть ситуацию и гибко реагировать на изменчивость финансового рынка</p>
    <h3>Наши приоритеты:</h3>
    <div class="container-priorities">
        <div class="block">
            <img src="/public/src/images/medal.png" alt="Finstar">
            <span>Поощрение перемен и инноваций</span>
        </div>
        <div class="block">
            <img src="/public/src/images/medal.png" alt="Finstar">
            <span>Проведение собственных анализов</span>
        </div>
        <div class="block">
            <img src="/public/src/images/medal.png" alt="Finstar">
            <span>Доверительное отношение с инвесторами</span>
        </div>
        <div class="block">
            <img src="/public/src/images/medal.png" alt="Finstar">
            <span>Прозрачность и открытость</span>
        </div>
        <div class="block">
            <img src="/public/src/images/medal.png" alt="Finstar">
            <span>Достижение консенсуса в любых ситуациях</span>
        </div>
    </div>
</div>

<!-- Company team block -->
<div class="team">
    <h2>Профессиональная команда Управляющей компании</h2>
    <p>ООО «Управляющая компания «Finstar»</p>

    <div class="container-team">
        <div class="block">
            <p>Кулик Дмитрий</p>
            <p class="last-p">Станиславович</p>
            <span>Генеральный директор ООО</span>
            <span>«Управляющая компания «Finstar»</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Хафизов Сергей</p>
            <p class="last-p">Евгеньевич</p>
            <span>Заместитель Генерального директора – контролер</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Халин Сергей</p>
            <p class="last-p">Юрьевич</p>
            <span>Начальник отдела риск-менеджмента</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Беспалов Павел</p>
            <p class="last-p">Юрьевич</p>
            <span>Начальник отдела финансового мониторинга</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Кляцкин Дмитрий</p>
            <p class="last-p">Вячеславович</p>
            <span>Специалист по инвестициям</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Дернов Андрей</p>
            <p class="last-p">Альбертович</p>
            <span>Заместитель директора по инвестициям</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Дернов Андрей</p>
            <p class="last-p">Альбертович</p>
            <span>Заместитель директора по инвестициям</span>
            <a href="">Подробнее</a>
        </div>
        <div class="block">
            <p>Хафизов Сергей</p>
            <p class="last-p">Евгеньевич</p>
            <span>Заместитель Генерального директора – контролер</span>
            <a href="">Подробнее</a>
        </div>
    </div>
</div>

<!-- Documents block -->
<div class="documents">
    <h2>Надзорный орган</h2>
    <div class="container-documents--top">
        <div class="qr">
            <img src="/public/src/images/qr.png" alt="QRcode">
            <span>Отсканируйте QR-код для перехода в справочник финансовых организаций</span>
        </div>

        <div class="contact-info">
            <img src="/public/src/images/bank-logo.png" alt="Банк России">
            <p>Контактные данные для направления обращений получателей финансовых услуг</p>
            <div class="data">
                <table>
                    <tr>
                        <td class="first-td">Сайт Банка России</td>
                        <td>+7 499 300 30 00</td>
                    </tr>
                    <tr>
                        <td class="first-td">Страница Управляющей компании на сайте</td>
                        <td>8 800 300 30 00</td>
                    </tr>
                    <tr>
                        <td class="first-td">Банка России</td>
                        <td>300 (для звонков с мобильных телефонов)</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="container-documents--bottom">
        <div class="first-document">
            <div class="text">
                <h2>Лицензия №21-000-1-00749</h2>
                <span>На осуществление деятельности по управлению инвестиционными фондами, паевыми инвестиционными фондами и негосударственными пенсионными фондами</span>
                <p>от 24 августа 2010 года, бессрочная</p>
            </div>
            <img src="/public/src/images/doc1.png" alt="Document">
        </div>
        <div class="second-document">
            <h2>Свидетельство СРО</h2>
            <span>ООО «Управляющая компания «Восток-Запад» является члено саморегулируемой организации Национальная организация участников фондового рынка</span>
            <p>Дата вступления в СРО: 24.01.2018</p>
            <h4>Саморегулируемая организация</h4>
            <img src="/public/src/images/naufor.png" alt="НАУФОР">
            <span>Контактные данные для направления обращений получателей финансовых услуг</span>

            <div class="contact-info">
                <p>Сайт НАУФОР</p>
                <div class="number">
                    <span>+7 495 787 77 74</span>
                    <span>+7 495 787 77 75</span>
                </div>
            </div>

            <div class="img">
                <img src="/public/src/images/doc2.png" alt="Document">
            </div>
        </div>
    </div>
</div>

<!-- Details block -->
<div class="details">
    <h2>Реквизиты</h2>
    <div class="container-details">
        <table>
            <tr>
                <td>Генеральный директор</td>
                <td>Кулик Дмитрий Станиславович</td>
            </tr>
            <tr>
                <td>Полное наименование</td>
                <td>Общество с ограниченной ответственностью «Управляющая компания «Восток-Запад»</td>
            </tr>
            <tr>
                <td>Сокращенное наименование</td>
                <td>ООО «Управляющая компания «Восток-Запад»</td>
            </tr>
            <tr>
                <td>Полное наименование на иностранном языке</td>
                <td>Asset Management Company "East - West" Limited</td>
            </tr>
            <tr>
                <td>Сокращенное наименование на иностранном языке</td>
                <td>AMC "East - West" Ltd.</td>
            </tr>
            <tr>
                <td>Место нахождения</td>
                <td>123112, г. Москва, вн.тер.г. муниципальный округ Пресненский, проезд 1-й Красногвардейский, д. 15, этаж 10, ком. 7</td>
            </tr>
            <tr>
                <td>ОГРН</td>
                <td>1056405422875</td>
            </tr>
            <tr>
                <td>ИНН</td>
                <td>6454074653</td>
            </tr>
            <tr>
                <td>КПП</td>
                <td>770301001</td>
            </tr>
            <tr>
                <td>Global Intermediary Identification Number (GIIN)</td>
                <td>TD6HD0.99999.SL.643</td>
            </tr>
            <tr>
                <td>Телефон</td>
                <td>+7 (495) 111-33-35</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>mail@ew-mc.ru</td>
            </tr>
            <tr>
                <td>Адрес сайта</td>
                <td>https://ew-mc.ru/</td>
            </tr>
            <tr>
                <td>Расчётный счёт</td>
                <td>40701810900010103349</td>
            </tr>
            <tr>
                <td>Банк</td>
                <td>ООО «ФФИН Банк» г. Москва</td>
            </tr>
            <tr>
                <td>Корреспондентский счёт</td>
                <td>30101810245250000900</td>
            </tr>
            <tr>
                <td>БИК</td>
                <td>044525900</td>
            </tr>
        </table>
    </div>
</div>

<!-- Contact block -->
<div class="contact">
    <div class="container-contact">
        <div class="text">
            <h2>Свяжитесь с нами</h2>
            <h2 class="last-h2">удобным способом</h2>
            <h3>+7 (495) 111-33-35</h3>
            <p>123112, г. Москва, вн.тер.г. муниципальный округ</p>
            <p>Пресненский, проезд 1-й</p>
            <p class="last-p">Красногвардейский, д. 15, этаж 10, ком. 7</p>
            <span>Общие вопросы: mail@ew-mc.ru</span>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2063.5469085217255!2d37.541452076652796!3d55.76258597308783!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNTXCsDQ1JzQ1LjMiTiAzN8KwMzInMzguNSJF!5e1!3m2!1sru!2s!4v1732042323077!5m2!1sru!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<!-- Conntecting footer -->
<?php 
    require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/footer.php';
?>

<!-- Connecting JS -->
<script src="/public/src/js/faqChanges.js"></script>
</body>
</html>