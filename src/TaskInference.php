<div class="card mt-3">
    <div class="card-body">
        <h3 class="task-title"><?php echo $title; ?></h3>
        <p class="task-description"><?php echo $description; ?></p>
        <p class="task-dates">Дата начала: <?php echo $dateStart; ?>, Дата окончания: <?php echo $dateEnd; ?></p>
        <div class="task-actions">
            <a href="/edit.php?id=<?php echo $taskId; ?>" class="btn btn-primary mr-2">Редактировать</a>
            <span> </span>
            <a href="/delete.php?id=<?php echo $taskId; ?>" class="btn btn-primary ">Удалить</a>
        </div>
    </div>
</div>