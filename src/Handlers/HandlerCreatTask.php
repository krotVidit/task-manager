<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "task - manager";
$tabl = "tabl_CreateTask";

$mysql = new mysqli($serverName, $userName, $password, $dataBase);
$mysql->query("SET NAMES utf8");

if ($mysql->connect_error) {
    die("Ошибка подключения к базе данных: " . $mysql->connect_error);
}

$title = $_POST['title'];
$description = $_POST['description'];
$dateStart = $_POST['dateStart'];
$dateEnd = isset($_POST['dateEnd']) ? $_POST['dateEnd'] : null;

// Подготовка и выполнение SQL-запроса на вставку данных в таблицу
$sql = "INSERT INTO $tabl (title, description, dateStart, dateEnd) VALUES ('$title', '$description', '$dateStart', '$dateEnd')";
if ($mysql->query($sql)) {
    echo "Данные успешно сохранены.";
} else {
    echo "Ошибка при сохранении данных: " . $mysql->error;
}

$mysql ->close();
?>