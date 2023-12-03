<?php
    session_start();
    if($_SESSION['id'])
    {
        $data = array(); // Создаем пустой массив для хранения данных
        $data[] = $_SESSION['Имя'];
        $jsonData = json_encode($data); // Преобразуем массив в формат JSON
        echo $jsonData; // Отправляем JSON-данные в JavaScript

    }
?>