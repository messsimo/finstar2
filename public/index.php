<?php
    require_once __DIR__ . '/../app/core/Router.php';
    require_once __DIR__ . '/../app/core/Controller.php';
    require_once __DIR__ . '/../app/core/Model.php';
    require_once __DIR__ . '/../app/core/View.php';
    $router = new Router();

    
    // Обработка страницы "О компании"
    $router->get('/about', 'AboutController@index');

    // Обработка страницы "Пифы"
    $router->get('/pif', 'PifController@index');