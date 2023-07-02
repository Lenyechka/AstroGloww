<?php
// Подключение к базе данных MySQL
$servername = "localhost"; // Имя сервера базы данных (обычно "localhost")
$username = "root"; // Имя пользователя базы данных
$password = ""; // Пароль пользователя базы данных
$dbname = "cosmetic_center"; // Имя базы данных

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения на ошибки
if ($conn->connect_error) {
    die("Ошибка подключения к базе данных: " . $conn->connect_error);
}

// Получение списка таблиц из базы данных
$tables = array();
$query = "SHOW TABLES";
$result = $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_row()) {
        $tables[] = $row[0];
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title>Выбор базы данных</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .action-icons {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .action-icons a {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <h1>Выберите базу данных:</h1>
    <select id="databaseSelect" onchange="loadDatabase()">
        <option value="">Выберите базу данных</option>
        <?php foreach ($tables as $table) { ?>
            <option value="<?php echo $table; ?>"><?php echo $table; ?></option>
        <?php } ?>
    </select>

    <div id="databaseContent"></div>

    <script>
        function loadDatabase() {
            // console.log('rerander database');
            var selectBox = document.getElementById("databaseSelect");
            var selectedTable = selectBox.options[selectBox.selectedIndex].value;
            if (selectedTable !== "") {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("databaseContent").innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "php/load_database.php?table=" + selectedTable, true);
                xhttp.send();
            } else {
                document.getElementById("databaseContent").innerHTML = "";
            }
        }
    </script>

    <script>
    function editRecord(id, tableName) {
        console.log("Редактирование записи с id: " + id);
        console.log(tableName);

        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                // Обработка ответа от сервера после успешного редактирования записи
                console.log("Запись успешно отредактирована");
                // После редактирования записи, вызовите функцию loadDatabase() для обновления таблицы.
                loadDatabase();
            }
        };
        xhttp.open("GET", "php/edit_record.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("id=" + id + "&tableName=" + tableName);
    }

    function deleteRecord(id, tableName) {
        // console.log(1);
            $.post('php/delete_record.php', {id, tableName}, function(data){
                alert(data);
                loadDatabase();
            })
        }
</script>
</body>
</html>