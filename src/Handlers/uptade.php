<?php
require_once("../connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['id'])) {
        $taskId = $_POST['id'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $dateStart = $_POST['dateStart'];
        $dateEnd = $_POST['dateEnd'];

        
        $updateSql = "UPDATE $tabl SET title = '$title', description = '$description', dateStart = '$dateStart', dateEnd = '$dateEnd' WHERE id = $taskId";
        $updateResult = $mysql->query($updateSql);

        if ($updateResult) {
            require ("../Page/SuccessfulSave.php");
        } else {
            
            echo "Ошибка при обновлении задачи: " . $mysql->error;
        }
    } else {
       
        echo "Не указан идентификатор задачи.";
    }
} else {
   
    echo "Недопустимый метод запроса.";
}

$mysql->close();
