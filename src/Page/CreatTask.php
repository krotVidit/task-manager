<?php
$titlePage = "Создание задачи";
require_once("../block/header.php");
?>

<form method="POST" action="../Handlers/HandlerCreatTask.php">

    <div class="mb-3 mt-4 text-center">
        <label for="exampleFormControlTextarea1" class="form-label">Тема Задачи</label>
        <textarea class="form-control" id="title" name="title" rows="1"></textarea>
    </div>

    <div class="mb-3 mt-4 text-center">
        <label for="exampleFormControlTextarea1" class="form-label">Описание Задачи</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
    </div>

    <div class="container text-center">
        <div class="row">

            <div class="mb-3 col">
                <label for="datepicker" class="form-label">Дата начала</label>
                <input type="text" class="form-control" id="datepickerStart" name="dateStart" placeholder="Выберите дату">
            </div>

            <div class="mb-3 col">
                <label for="datepicker" class="form-label">Дата окончание </label>
                <input type="text" class="form-control" id="datepickerEnd" name="dateEnd" placeholder="Выберите дату">
            </div>

        </div>
    </div>
    <div class="buttonSave text-center">
        <button class="btn btn-primary mt-4">Сохранить</button>
    </div>
</form>






<?php
require_once("../block/footer.php");
?>