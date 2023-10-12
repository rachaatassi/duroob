<?php

function all(){
   
    require_once('./app/core/models/pathModel.php');
    $path = getAll();
    require_once('./app/core/models/habitModel.php');
    $habits = getHabits();
    require_once('./app/core/views/path/all.php');
   
}

function showAll()
{
    
  
   // require_once('./views/path/all.php');
}



function addPath(){
    require_once('./app/core/models/pathModel.php');
    if($_POST){

        $path = htmlentities($_POST["pathName"]);
        $details = htmlentities($_POST["details"]);
        $axeId1 = htmlentities($_POST["axe1"]);
        $axeId2 = htmlentities($_POST["axe2"]);
        $axeId3 = htmlentities($_POST["axe3"]);
        if (!empty($path)){
            sendAddPath($path,$details,$axeId1,$axeId2,$axeId3);
            header("Location: /index.php?controller=path&action=all");
        }
    }
}
function showAddPath(){
    require_once('./app/core/models/pathModel.php');
    $axes = getAxes();
    require_once('./app/core/views/path/add.php');
}

function deletePath(){
    require_once('./app/core/models/pathModel.php');
    if ($_POST && $_POST["deleteID"]) {

        // Stocke l'ID du livre à supprimer dans une variable
        $pathID = $_POST["deleteID"];
        sendDeletePath($pathID);
    } else {
        header('Location: index.php?controller=book&action=error');
    }

}


?>