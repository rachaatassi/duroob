<!-- Si la requête a retourné un résultat (on affiche le formulaire d'édition avec les données pré-renseignées)-->
<h1 >Modifuing user information</h1>

<form action="/index.php?controller=user&action=updateUser" method="POST" class="form">
    
     <?php $user =$_SESSION["user"] ?>
     <div class="culmn">
             <label for="firstName">Your  Last Name</label>
                <input type="text" name="lastName" value="<?= $user["last_name"] ?>" >
     </div>
        <div class="culmn">
                <label for="firstName">Your First Name</label>
                <input type="text" name="firstName" value="<?= $user["first_name"] ?>" >
        </div>
        <div class="culmn">
                <label for="birthDate">your date of birth</label>
                <input type="date" name="birthDate" value="<?= $user["birth_date"] ?>" >
        </div>
        <div class="culmn">
                <label for="email">Your email</label>
                <input type="email" name="email" value="<?= $user["email"] ?>" >
        </div>
        <div class="culmn">
                <label for="password">Your Password</label>
                <input type="password" name="password">
        </div>
      
    
     
        
       <button type="submit">Update Personal Information</button>
</form>

<?php
