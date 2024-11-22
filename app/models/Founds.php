<?php
    require_once(__DIR__ . '/../models/database.php');  

class Founds {
    public static function getLastFounds($pdo) {  
        if (!$pdo) {
            die('Ошибка подключения к базе данных.');
        }

        $sql = "SELECT * FROM `information` ORDER BY id DESC LIMIT 6";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}