<?php
session_start();

    $pageTitle = "home Page";
    require_once('./app/core/views/header.php');

    if($_GET && $_GET['controller']){
        $controller =$_GET['controller'].'Controller';
        require_once('./app/core/controllers/'.$controller.'.php');
        
        if($_GET["action"]){
            $action = $_GET["action"];
            $action();
        } else {
          //  header('Location: ./');
        }
    
    
    }
    else{
        require_once('./app/core/controllers/homeController.php');
        getPage();
    }
require_once('./app/core/views/footer.php');
?>
     