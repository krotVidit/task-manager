<?php
require_once("../connect.php");

if (isset($_GET['id'])) {
    $taskId = $_GET['id'];

    
    $checkSql = "SELECT * FROM $tabl WHERE id = $taskId";
    $checkResult = $mysql->query($checkSql);

    if ($checkResult && $checkResult->num_rows > 0) {
        // Задача существует, получаем данные задачи
        $task = $checkResult->fetch_assoc();
        $title = $task['title'];
        $description = $task['description'];
        $dateStart = $task['dateStart'];
        $dateEnd = $task['dateEnd'];

     
?>

        <h2>Редактирование задачи</h2>

        <form action="../Handlers/uptade.php" method="post">
            <input type="hidden" name="id" value="<?php echo $taskId; ?>">
            <div>
                <label for="title">Заголовок:</label>
                <input type="text" name="title" id="title" value="<?php echo $title; ?>">
            </div>
            <div>
                <label for="description">Описание:</label>
                <textarea name="description" id="description"><?php echo $description; ?></textarea>
            </div>
            <div>
                <label for="dateStart">Дата начала:</label>
                <input type="date" name="dateStart" id="dateStart" value="<?php echo $dateStart; ?>">
            </div>
            <div>
                <label for="dateEnd">Дата окончания:</label>
                <input type="date" name="dateEnd" id="dateEnd" value="<?php echo $dateEnd; ?>">
            </div>
            <div>
                <input type="submit" value="Сохранить">
            </div>
        </form>

        <div class="text-center">
            <a href="../Page/CreateTask.php" class="btn btn-primary mt-4">Создать новую задачу</a>
        </div>

<?php
    } else {
        
        echo "Задача не существует.";
    }
} else {
    
    echo "Не указан идентификатор задачи.";
}

$mysql->close();
?>