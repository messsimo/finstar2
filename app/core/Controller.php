<?php

class Controller {
    public function view($view, $data = []) {
        // Проверяем, существует ли файл представления
        if (file_exists(__DIR__ . '/../views/' . $view . '.php')) {
            // Передаем данные в представление
            extract($data);
            require_once(__DIR__ . '/../views/' . $view . '.php');
        } else {
            die("View not found!");
        }
    }
}