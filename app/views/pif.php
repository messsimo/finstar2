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

    <!-- Conntecting footer -->
    <?php 
        require_once $_SERVER['DOCUMENT_ROOT'] . '/app/blocks/footer.php';
    ?>
</body>
</html>