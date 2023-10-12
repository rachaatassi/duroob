

<?php 
    $pageTitle = "user's Paths";
    require_once($_SERVER['DOCUMENT_ROOT'].'/app/core/views/header.php');
?>


<div class="personInfoContain">
    
<h3>personal information</h3>
    
    <div class="personInfo">
    
    
        
             <p><?= $_SESSION["user"]["first_name"];?> &nbsp;<?= $_SESSION["user"]["last_name"];?></p>
             
            
            <p><?= $_SESSION["user"]["birth_date"];?></p>
            <p><?= $_SESSION["user"]["email"];?></p>
            <!-- <a href="/index.php?controller=user&action=update"></a> -->
    
    </div>
     
    <a href="/index.php?controller=user&action=showFormUpdateUser">Modify user information</a>
</div>


<div id="showPaths" class="containStyle">
    <h3>paths</h3>
  
    <?php
    foreach($path as $one ){
       ?>
       <div class="cardPath">
           <p>Path :  <span> <?= $one["path_name"];?></span></p>
           <ul>
            <li><?= $one["axe_name1"];?></li>
            <li><?= $one["axe_name2"];?></li>
            <li><?= $one["axe_name3"];?></li>
           </ul>
           <form method="POST" action="index.php?controller=path&action=deletePath">
                                <input type="hidden" value="<?= $one["path_id"]; ?>" name="deleteID">
                                <input type="submit" value="🗑️" class="bg-danger">
                            </form>
       </div>
    <?php }
    ?>
    <a href="/index.php?controller=path&action=showAddPath"> create New Path</a>
</div>
<div class="containStyle" id="createHabit">
    
    <h3>Habits</h3>
    <a href="/index.php?controller=habit&action=showAddHabit"> create New Habit</a>
</div>

<?php
require_once('./app/core/views/habit/all.php');
?>