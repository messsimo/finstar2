<?php
require_once(__DIR__ . '/../models/Founds.php'); // Подключаем модель

class PifController extends Controller {
    public function index() {
        $pdo = require(__DIR__ . '/../models/database.php');

        // Получаем данные
        $all_founds = Founds::getLastFounds($pdo); 

        // Передаем данные в вид
        $this->view('pif', ['all_founds' => $all_founds]);
    }
}