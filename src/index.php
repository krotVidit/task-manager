<?php
$titlePage  = "Главная страница";
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

      require("../src/Page/TaskInference.php");
    }
} else {
    
   
    require ("../src/Page/NoTasskCreated.php");
   
}

$mysql->close();



?>


<?php
require_once ("./block/footer.php");
?>

