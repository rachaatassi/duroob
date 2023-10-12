<?php

    //information allows to connect to database duroob
    $env = "localhost";
    $dbName = "duroob";
    $dbUser = "root";
    $dbPwd = "";

    //storing the status of connection in the variable $pdoConn
    $pdoConn = new PDO('mysql:host='.$env.';dbname='.$dbName.';charset=utf8',$dbUser,$dbPwd);
  
?>