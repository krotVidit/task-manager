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
