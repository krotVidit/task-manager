<?php
$titlePage = "Редактирование страницы";
require("../block/header.php");
?>


<form method="POST" action="../Handlers/uptade.php">
    <input type="hidden" name="id" value="<?php echo $taskId; ?>">

    <div class="mb-3 mt-4 text-center">
        <label for="title" class="form-label">Тема задачи</label>
        <input class="form-control " type=" text" name="title" id="title" value="<?php echo $title; ?>">
    </div>

    <div class="mb-3 mt-4 text-center">
        <label class="form-label" for="description">Описание Задачи</label>
        <textarea class="form-control" name="description" id="description" rows="3"><?php echo $description; ?></textarea>
    </div>


    <div class="container text-center ">
        <div class="row">
            <div class=" mt-3 col">
                <label class="form-label" for="datepicker">Дата начала:</label>
                <input class="form-control" type="text" name="dateStart" id="datepickerStart" value="<?php echo $dateStart; ?>">
            </div>

            <div class="mt-3 col">
                <label class="form-label" for="datepicker">Дата окончания:</label>
                <input class="form-control" type="text" name="dateEnd" id="datepickerEnd" value=" <?php echo $dateEnd; ?>">
            </div>

            <div class="buttonSave text-center">
                <button class="btn btn-primary mt-4">Сохранить</button>
            </div>
        </div>
</form>



<?php
require("../block/footer.php");
?>