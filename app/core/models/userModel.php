<?php 

function sendSignUp($last,$first,$birth,$email,$password){
  try{
    require_once('./app/core/models/dbConnect.php');
    $req = "INSERT INTO users (last_name, first_name, birth_date, email, password) VALUES ('$last', '$first', '$birth', '$email', '$password')";
    $pdoConn->query($req);
  }
  catch(PDOException){
   return false;
  }
   
  return true;
}

function getSignIn($email,$password){
    require_once('./app/core/models/dbConnect.php');

     if ($pdoConn) {
        // Use prepared statements to prevent SQL injection
        $query = "SELECT * FROM users WHERE email = '$email'";
        $stmt = $pdoConn->query($query)->fetch(PDO::FETCH_ASSOC);
       
        return $stmt;
    

      // if ($password=== $stmt['password']) {
      
            // Password matches, the user is logged in
        //    echo "You are connected";
        //} else {
            // Incorrect credentials
          //  echo "Incorrect credentials";
        //}
    //} else {
      ///  echo "Database connection error";
    }

  }

function  secdUpdateUser ($lastname, $firstname,$birth, $email, $password){
  require_once('dbConnect.php');
  $userId=$_SESSION["user"]["user_id"];

    // Stockage de la requête d'ajout au sein de la variable $query.
    $query = "UPDATE users SET last_name='$lastname', first_name='$firstname', email='$email', password='$password', birth_date='$birth' WHERE user_id=$userId";

    // Execution de la requête sur la base de données.
    // Stockage du résultat de l'exécution dans la variable $execution.
    $execution = $pdoConn->query($query);

    if ($execution) {
    
        header('Location: /index.php?controller=path&action=all');
    } else {
        // echo "test nok";
        header('Location: /error');
    }
} // Fin du contrôle de la connexion à PDO 


