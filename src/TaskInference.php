<div class="task-card bg-info text-white p-3 mb-4 rounded">
    <h3 class="task-title"><?php echo $title; ?></h3>
    <p class="task-description"><?php echo $description; ?></p>
    <p class="task-dates">Дата начала: <?php echo $dateStart; ?>, Дата окончания: <?php echo $dateEnd; ?></p>
    <div class="task-actions">
        <a href="/edit.php?id=<?php echo $taskId; ?>" class="btn btn-light mr-2">Редактировать</a>
        <span> </span>
        <a href="/delete.php?id=<?php echo $taskId; ?>" class="btn btn-light">Удалить</a>
    </div>
</div>