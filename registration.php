<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {

        // Подключение к базе данных
        $conn = mysqli_connect("localhost", "root", "", "FAPWA");

        // Проверка соединения
        if (!$conn)
        {
            die("Ошибка подключения: " . mysqli_connect_error());
        }

        // Получение данных из формы
        $login = $_POST['login-input'];
        $email = $_POST['email-input'];
        $name = $_POST['name-input'];
        $password = $_POST['password-input'];

        $name = mysqli_real_escape_string($conn, $name);
        $email  = mysqli_real_escape_string($conn, $email);
        $password  = mysqli_real_escape_string($conn, $password);
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Подготовка и выполнение SQL-запроса
        $sql = "INSERT INTO user (Имя, Логин, Пароль, Почта) VALUES ('$name', '$login', '$password', '&email')";

        if (mysqli_query($conn, $sql))
        {
            header('Location: index.html');
            exit;
        }
        else
        {
            echo 'Ошибка: ' . mysqli_error($conn);
        }

        // Закрытие соединения
        mysqli_close($conn);
    }
?>