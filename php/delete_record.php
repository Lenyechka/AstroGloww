<?php
// Подключение к базе данных MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cosmetic_center";
// var_dump($_POST, $_GET);

// Получение данных из AJAX-запроса
$id = $_POST["id"];
$tableName = $_POST["tableName"];

$query_select = "select * from $tableName";

// var_dump($query_select);

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения на ошибки
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

$result_select = $conn->query($query_select);
$fieldNames = $result_select->fetch_fields();
// var_dump($result_select);

$elementLine = $fieldNames[0];
$array = (array) $elementLine; 
$nameFirstElement = array_shift($array);


// $firstName = $array[$nameArray];

// Здесь можно добавить код для выполнения удаления записи с указанным id в таблице с указанным tableName.
$query = "DELETE FROM $tableName WHERE $nameFirstElement = $id";
$result = $conn->query($query);

// Проверка результата и отправка ответа клиенту
if ($result) {
    http_response_code(200);
    echo "Запись успешно удалена";
} else {
    http_response_code(500);
    echo "Ошибка удаления записи";
}

$conn->close();
?>
