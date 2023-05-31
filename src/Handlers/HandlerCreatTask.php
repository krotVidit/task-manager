<?php
require_once("../connect.php");

require ("../Handlers/_POST.php");


$sql = "INSERT INTO $tabl (title, description, dateStart, dateEnd) VALUES ('$title', '$description', '$dateStart', '$dateEnd')";
if ($mysql->query($sql)) {
    require_once("../Page/SuccessfulSave.php");
  
 
    
} else {
    echo "Ошибка при сохранении данных: " . $mysql->error;
}

$mysql ->close();
?>