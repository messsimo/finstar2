<?php

class Router {
    // Метод для обработки GET-запросов
    public function get($route, $controllerAction) {
        // Получаем текущий путь из URL
        $currentRoute = $_SERVER['REQUEST_URI'];

        // Если путь совпадает с заданным маршрутом
        if ($currentRoute == $route) {
            // Разбиваем строку с контроллером и действием
            list($controllerName, $actionName) = explode('@', $controllerAction);

            // Проверяем, существует ли файл контроллера
            $controllerPath = __DIR__ . '/../controllers/' . $controllerName . '.php';
            if (file_exists($controllerPath)) {
                // Подключаем файл контроллера
                require_once $controllerPath;

                // Создаем объект контроллера
                $controller = new $controllerName();

                // Проверяем, существует ли метод
                if (method_exists($controller, $actionName)) {
                    $controller->$actionName();
                } else {
                    echo "Метод $actionName не найден в контроллере $controllerName.";
                }
            } else {
                echo "Контроллер $controllerName не найден.";
            }
        }
    }
}
