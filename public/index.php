<?php
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';
require_once '../app/core/View.php';

// Получаем URL и разбиваем его на части
$request = $_SERVER['REQUEST_URI'];
$url = explode('/', $request);

// Устанавливаем контроллер и действие по умолчанию
$controllerName = isset($url[1]) ? ucfirst($url[1]) . 'Controller' : 'AboutController';
$action = isset($url[2]) ? $url[2] : 'index';

// Путь к контроллеру
$controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';
// Подключаем контроллер
if (file_exists($controllerFile)) {
    require_once $controllerFile;
    $controller = new $controllerName();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Действие не найдено!";
    }
} else {
    echo "Ошибка в подключении к контроллеру!";
}