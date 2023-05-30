<?php
require_once("../connect.php");

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

  
    $checkSql = "SELECT * FROM $tabl WHERE id = $taskId";
    $checkResult = $mysql->query($checkSql);
    
    if ($checkResult->num_rows > 0) {
        
        $deleteSql = "DELETE FROM $tabl WHERE id = $taskId";
        if ($mysql->query($deleteSql)) {
           require ("../Page/SuccessfulDelete.php");
        } else {
           
            echo "Ошибка при удалении задачи: " . $mysql->error;
        }
    } else {
        
        echo "Задача не существует.";
    }
} else {
    
    echo "Не указан идентификатор задачи.";
}

$mysql->close();
