<?php 

function add(){
    require_once('./app/core/models/habitModel.php');
    
    $name = htmlentities($_POST["habitName"]);
    $time = htmlentities($_POST["timePerDay"]);
    $path = htmlentities($_POST["pathId"]);
    $axe = htmlentities($_POST["axeId"]);
   

    addOne($name, $time,$path,$axe);
    header('Location: /index.php?controller=path&action=all');

 
   
}
function showAddHabit(){
   
    require_once('./app/core/models/pathModel.php');
    $habitPath = getAll();
        require_once('./app/core/views/habit/add.php');
        
}

function update(){
  
    require_once('./app/core/models/habitModel.php');
    $aDays = $_POST["atchived_days"];
    $hId = $_POST["habit_id"];
    habitUpdate($aDays,$hId);

}

?>