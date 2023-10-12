<?php
function   addOne($name, $time,$path,$axe){
    // connection to the database 
    require_once("dbConnect.php");

    // if the connection is established then...
    if($pdoConn){
     
        $userId = $_SESSION["user"]["user_id"];
      
        $query = "INSERT INTO habits (habit_name, time_per_day_min, user_id, path_id, axe_id, days, atchived_days) VALUES ('$name', '$time', '$userId', '$path', '$axe', 30, 0)";


        $execution = $pdoConn->query($query);

        if($execution){
          
            header('Location: index.php?controller=habit&action=all');
        }
    }
}
function getHabits(){
    require("dbConnect.php");
    

    $results = []; // Initialize an empty array to store results

    if ($pdoConn) {
        // If the database connection is successful:
  
        $userId = $_SESSION["user"]["user_id"];
        // Store the SQL query in the $query variable. Note the use of single quotes for the array index.
        $query = "SELECT * FROM habits WHERE user_id = $userId ";

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
function    habitUpdate($aDays,$hId){
    require_once("dbConnect.php");
    if ($pdoConn) {
        // If the database connection is successful:
  
       
        // Store the SQL query in the $query variable. Note the use of single quotes for the array index.
        $query = "UPDATE habits SET atchived_days='$aDays' WHERE habit_id=$hId";

        // Execute the query on the database.
        $pdoConn->query($query);

        
    }
 


}



?>