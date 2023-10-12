
<?php 



function signUp()
{
    require_once('./app/core/models/userModel.php');

    if ($_POST) {
  
        // Form is submitted
      
        $last = htmlentities($_POST["lastName"]);
        $first = htmlentities($_POST["firstName"]);
        $birth = htmlentities($_POST["birthDate"]);
        $email = htmlentities($_POST["email"]);
       
      
        $password = password_hash(htmlentities($_POST["password"]),PASSWORD_ARGON2I);
        
       // $password = password_hash($_POST['password'], PASSWORD_ARGON2I);
        $isSignUp = sendSignUp($last, $first, $birth, $email, $password);
       // $_SESSION["user"] = getSignIn($email, $password);
        // Redirect or display a success message here
        if ($isSignUp){
            header("Location: /index.php");
        }
        else {
            echo "email is already registered";
        }
    } 
}
function signIn() {
    require_once('./app/core/models/userModel.php');
    if ($_POST) {
        $email = htmlentities($_POST["email"]);
        $password = htmlentities($_POST["password"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Email format is invalid";
        }

        if (empty($password)) {
            $errors["pwd"] = "Password is required";
        }

        if (!isset($errors)) {
            // No validation errors, proceed with login
           

           $answer = getSignIn($email, $password);


          if (password_verify($password,$answer["password"])){
          
                $_SESSION["user"] = $answer;
                //echo  $_SESSION["user"]["id"];
                //echo " \n done youe sessions is started";
           

            header("Location: /index.php?controller=path&action=all");
           }
           else {
            echo "password is not correct ";
           }
           
        }
    }
}


function showFormUpdateUser(){
  
    require_once('./app/core/views/user/update.php');

}
function updateUser(){
    require_once('./app/core/models/userModel.php');
    
    var_dump($_POST);
    if ($_POST && isset($_POST["lastName"])) {

        $lastname = htmlentities($_POST["lastName"]);
        $firstname = htmlentities($_POST["firstName"]);
        $birth = htmlentities($_POST["birthDate"]);
        $email = htmlentities($_POST["email"]);
        if ($_POST["password"]){
            $password = password_hash(htmlentities($_POST["password"]),PASSWORD_ARGON2I);
     
        }
        else {
            $password = $_SESSION["user"]["password"];

        }
        $_SESSION["user"]["last_name"]= $lastname;
        $_SESSION["user"]["first_name"]= $firstname;
        $_SESSION["user"]["birth_date"]= $birth;
        $_SESSION["user"]["email"]= $email;
        


        secdUpdateUser($lastname, $firstname,$birth, $email, $password);
    }
  

}
function signout(){
    session_destroy();
    header("Location: /");
}
?>