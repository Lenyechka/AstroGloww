<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmetic_center";

// Получение данных из AJAX-запроса
$id = $_POST["id"];
$tableName = $_POST["tableName"];

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения на ошибки
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Здесь можно добавить код для выполнения редактирования записи с указанным id в таблице с указанным tableName.
$query = "UPDATE $tableName SET column1 = 'new_value1', column2 = 'new_value2' WHERE id = $id";
$result = $conn->query($query);

// Проверка результата и отправка ответа клиенту
if ($result) {
    http_response_code(200);
    echo "Запись успешно отредактирована";
} else {
    http_response_code(500);
    echo "Ошибка редактирования записи";
}

$conn->close();
?>
