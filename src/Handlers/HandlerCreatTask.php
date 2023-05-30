<?php
require_once("../connect.php");

$title = $_POST['title'];
$description = $_POST['description'];
$dateStart = $_POST['dateStart'];
$dateEnd = isset($_POST['dateEnd']) ? $_POST['dateEnd'] : null;


$sql = "INSERT INTO $tabl (title, description, dateStart, dateEnd) VALUES ('$title', '$description', '$dateStart', '$dateEnd')";
if ($mysql->query($sql)) {
    echo "Данные успешно сохранены.";
    
} else {
    echo "Ошибка при сохранении данных: " . $mysql->error;
}

$mysql ->close();
?>