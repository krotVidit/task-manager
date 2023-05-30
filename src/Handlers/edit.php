<?php
require_once("../connect.php");

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    
    $checkSql = "SELECT * FROM $tabl WHERE id = $taskId";
    $checkResult = $mysql->query($checkSql);

    if ($checkResult && $checkResult->num_rows > 0) {
        $task = $checkResult->fetch_assoc();
        $title = $task['title'];
        $description = $task['description'];
        $dateStart = $task['dateStart'];
        $dateEnd = $task['dateEnd'];

?>

<?php
require ("../Page/EditTask.php");

?>



        

<?php
    } else {
        
        echo "Задача не существует.";
    }
} else {
    
    echo "Не указан идентификатор задачи.";
}

$mysql->close();
?>