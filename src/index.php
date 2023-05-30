<?php
$title  = "Главная страница";
require_once ("./block/header.php");
?>

<?php
require_once("../src/connect.php");

$sql = "SELECT * FROM $tabl";
$result = $mysql->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $taskId = $row['id'];
        $title = $row['title'];
        $description = $row['description'];
        $dateStart = $row['dateStart'];
        $dateEnd = $row['dateEnd'];

        echo '<div class="task-card bg-info text-white p-3 mb-4 rounded">';
        echo '<h3 class="task-title">' . $title . '</h3>';
        echo '<p class="task-description">' . $description . '</p>';
        echo '<p class="task-dates">Дата начала: ' . $dateStart . ', Дата окончания: ' . $dateEnd . '</p>';
        echo '<div class="task-actions">';
        echo '<a href="/edit.php?id=' . $taskId . '" class="btn btn-light mr-2">Редактировать</a>';
        echo "<span>   </span>";
        echo '<a href="/delete.php?id=' . $taskId . '" class="btn btn-light">Удалить</a>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo '<p>Нет созданных задач.</p>';
}

$mysql->close();



?>


<?php
require_once ("./block/footer.php");
?>

