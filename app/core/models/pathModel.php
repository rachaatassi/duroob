<?php



function sendAddPath($path,$details,$axeId1,$axeId2,$axeId3){
    
    require_once('dbConnect.php');
    $id= $_SESSION["user"]["user_id"];
    $req="INSERT INTO paths (path_name,details,user_id,axe_id1,axe_id2,axe_id3)
     VALUES ('$path', '$details','$id','$axeId1','$axeId2','$axeId3')";
    $exec = $pdoConn->query($req);

    //return $exec;
    if ($exec) {
        return true;
    } else {
        // Handle database error here
     return false;
    }
}
function getAll()
{
    require('dbConnect.php');

    $results = []; // Initialize an empty array to store results

    if ($pdoConn) {
        // If the database connection is successful:

        // Store the SQL query in the $query variable. Note the use of single quotes for the array index.
        $query = "SELECT paths.*, 
        axes1.axe_name AS axe_name1, 
        axes2.axe_name AS axe_name2, 
        axes3.axe_name AS axe_name3 
 FROM paths 
 INNER JOIN axes AS axes1 ON axes1.axe_id = paths.axe_id1 
 INNER JOIN axes AS axes2 ON axes2.axe_id = paths.axe_id2 
 INNER JOIN axes AS axes3 ON axes3.axe_id = paths.axe_id3 
 WHERE user_id = " . $_SESSION["user"]["user_id"];

        // Execute the query on the database.
        $execution = $pdoConn->query($query);

        if ($execution) {
            // If the query executed successfully:
            // Store all the results of the query in the $results variable.
            $results = $execution->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    return $results;
}
function  getAxes(){
    require_once('dbConnect.php');

    $axeResult = []; // Initialize an empty array to store results

    if ($pdoConn) {
        // If the database connection is successful:

        // Store the SQL query in the $query variable. Note the use of single quotes for the array index.
        $query = "SELECT * FROM axes ";

        // Execute the query on the database.
        $execution = $pdoConn->query($query);

        if ($execution) {
            // If the query executed successfully:
            // Store all the results of the query in the $results variable.
            $axeResult = $execution->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    return $axeResult;

}
function  fetchPath(){
    require_once('dbConnect.php');

    $results = []; // Initialize an empty array to store results

    if ($pdoConn) {
        // If the database connection is successful:

        // Store the SQL query in the $query variable. Note the use of single quotes for the array index.
        $query = "SELECT paths.*, 
        axes1.axe_name AS axe_name1, 
        axes2.axe_name AS axe_name2, 
        axes3.axe_name AS axe_name3 
 FROM paths 
 INNER JOIN axes AS axes1 ON axes1.axe_id = paths.axe_id1 
 INNER JOIN axes AS axes2 ON axes2.axe_id = paths.axe_id2 
 INNER JOIN axes AS axes3 ON axes3.axe_id = paths.axe_id3 
 WHERE user_id = " . $_SESSION["user"]["user_id"];

        // Execute the query on the database.
        $execution = $pdoConn->query($query);

        if ($execution) {
            // If the query executed successfully:
            // Store all the results of the query in the $results variable.
            $results = $execution->fetchAll(PDO::FETCH_ASSOC);
        }
    }
    return $results;
}

function sendDeletePath($pathID){
    require_once('dbConnect.php');
     if ($pdoConn) {
    
        $query = "DELETE FROM paths WHERE path_id=$pathID";
        $execution = $pdoConn->query($query);

        if ($execution) {
        
             header("Location: /index.php?controller=path&action=all");
        }
        // Si la requête a rencontré une erreur lors de son execution
        else {
            header('Location: index.php?controller=book&action=error');
        }
    } // Fin du contrôle de la connexion à PDO
}


?>
