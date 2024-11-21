<?php

class View {
    public function render($viewName) {
        // Абсолютный путь до директории с представлениями
        $viewFile =  '../app/views/' . $viewName . '.php';
        
        // Проверка, существует ли файл представления
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Ошибка: Представление '$viewName' не найдено!";
        }
    }
}