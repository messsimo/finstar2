<?php

class View {
    public function render($viewName) {
        // Загружаем файл представления
        $viewFile = '../app/views/' . $viewName . '.php';
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            echo "Ошибка: Представление не найдено!";
        }
    }
}