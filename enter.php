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
        $login = $_POST['login-signin-input'];
        $password = $_POST['password-signin-input'];

        $name = mysqli_real_escape_string($conn, $name);
        $login  = mysqli_real_escape_string($conn, $login);

        $sql = "SELECT * FROM user WHERE Логин = '$login'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $hashedPassword = $row['Пароль'];

            // Проверка соответствия пароля введенному паролю
            if (password_verify($password, $hashedPassword)) {
                // Аутентификация успешна, выполни необходимые действия (например, перенаправление на другую страницу)
                echo "Аутентификация успешна!";
            } else {
                // Вход не удался, показать сообщение об ошибке или выполнить необходимые действия
                echo "Неправильная почта или пароль!";
            }
        }

        $conn->close();
    }
?>