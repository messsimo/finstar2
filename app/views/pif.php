<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Connecting CSS -->
    <link rel="stylesheet" href="/public/src/css/index.css">
    <link rel="stylesheet" href="/public/src/css/header.css">
    <link rel="stylesheet" href="/public/src/css/footer.css">
    <link rel="stylesheet" href="/public/src/css/pif.css">
    <link rel="stylesheet" href="/public/src/css/adaptation_pif.css">

    <title>Finstar</title>
</head>
<body>
    <!-- Conntecting header -->
    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/header.php';
    ?>

    <!-- Hero block -->
    <div class="hero">
        <div class="text">
            <span>ООО «Управляющая компания «Finstar»</span>
            <h2>Паевые инвестиционные фонды</h2>
            <p>Для частных инвесторов</p>
            <p>Для квалифицированных инвесторов</p>
            <p>Инвестиционные стратегии для любых целей</p>
        
            <div class="btns">
                <a href="">Получить консультацию</a>
                <a class="btn" href=""> Повышение фин. грамотности</a>
            </div>
        </div>

        <img src="/public/src/images/hero-pif.png">
    </div>

    <!-- Founds block -->
    <div class="founds">
        <div class="filter">
            <a href="" class="active">Все фонды</a>
            <a href="">Для неквалифицированных инвесторов</a>
            <a href="">Для квалифицированных инвесторов</a>
        </div>

        <div class="container-founds">
            <?php foreach($all_founds as $el) { ?>
            <div class="block">
                <img src="/public/src/images/<?= $el["image"] ?>" alt="Found Finstar">
                <div class="text">
                    <h3><?= $el["title"] ?></h3>
                    <span><?= $el["description"] ?></span>
                    
                    <div class="data">
                        <div class="block">
                            <p class="first-p">Расчетная стоимость пая</p>
                            <p><b><?= number_format($el["share_value"]) ?> USD</b> на 09.11.2023</p>
                        </div>
                        <div class="block">
                            <p class="first-p">Стоимость чистых активов</p>
                            <p><b><?= number_format($el["asset_value"]) ?> USD</b> на 09.11.2023</p>
                        </div>
                        <div class="block">
                            <p class="first-p">Прирост расчетной стоимости инвестиционного пая</p>
                            <p><b><?= number_format($el["estimated_value"]) ?>%</b> на 09.11.2023</p>
                        </div>
                    </div>

                    <div class="btn">
                        <a href="">Подробнее</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- Information block -->
    <div class="info">
        <h2>Паевые инвестиционные фонды</h2>

        <div class="container-info">
            <div class="block">
                <div class="sub-block">
                    <img src="/public/src/images/info1.png" alt="Finstar">
                    <div class="text">
                        <p>Контроль со стороны государства</p>
                        <span>Деятельность управляющей компании контролируется государством. Вы можете быть уверены в надежности своих инвестиций</span>
                    </div>
                </div>
                <div class="sub-block">
                    <img src="/public/src/images/info4.png" alt="Finstar">
                    <div class="text">
                        <p>Профессиональное управление</p>
                        <span>Ваши денежные средства работают по заранее известной стратегии,  разработанной профессиональными инвесторами</span>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="sub-block">
                    <img src="/public/src/images/info3.png" alt="Finstar">
                    <div class="text">
                        <p>Для начинающих и опытных инвесторов</p>
                        <span>Вам не нужно подбирать инвестиционные идеи, взвешивать риски и анализировать рынок. ПИФы — это готовый продукт, где все просчитано за вас</span>
                    </div>
                </div>
                <div class="sub-block">
                    <img src="/public/src/images/info2.png" alt="Finstar">
                    <div class="text">
                        <p>Минимизация рисков</p>
                        <span>ПИФ включает в себя ценные бумаги сразу несколько компаний из разных технологических секторов. Инвестиционные риски минимальны</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact form -->
    <div class="contact-form">
        <div class="img">
            <img src="/public/src/images/bank.png" alt="Bank">
        </div>

        <div class="form">
            <form>
                <input type="text" placeholder="Введите имя">
                <input type="text" placeholder="+7(___)___-__-__" oninput="if (!this.value.startsWith('+7')) this.value = '+7' + this.value.replace(/^\+7/, '');" value="+7">
                <input type="text" placeholder="Введите электронную почту">
                <textarea placeholder="Текст обращения"></textarea>

                <div class="info">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox"></label>
                    <span>Я согласен с <b>политикой конфиденциальности</b> и даю <b>согласие на обработку моих персональных данных</b></span>
                </div>

                <button>Получить консультацию</button>
            </form>
        </div>
    </div>


    <!-- Conntecting footer -->
    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/footer.php';     
    ?>
</body>
</html>