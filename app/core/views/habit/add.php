

<link rel="stylesheet" href="../../../public/css/style.css">
<script src="/app/public/js/form.js" defer></script>
<main>
    <h1>Add New Habit</h1>
    
    <form action="/index.php?controller=habit&action=add" method="POST" class="form">
        <div class="culmn">
            <label for="habitName">Habit Name</label>
            <input type="text" name="habitName" placeholder="Enter Habit Name" required>
        </div>
    <div class="culmn">
        
            <label for="timePerDay">Time per Day (min)</label>
            <input type="number" name="timePerDay" placeholder="Enter Time per Day" required>
    </div>
    
        <div class="culmn">
            <label for="pathId">Select Path</label>
            <select name="pathId" required id="pathSelect">
                <?php
                foreach ($habitPath as $path){
                    ?>
                    <option value="<?= $path["path_id"];?>"><?= $path["path_name"];?></option>
               <?php }
                ?>
              </select>
        </div>
          <div class="culmn">
              <label for="axeId">Select Axe</label>
                      <?php
                      foreach($habitPath as $path){
                ?>
                 <select class="invis axes" id="<?=$path["path_id"] ;?>"   required>
                 <option value="<?= $path["axe_id1"] ;?>"><?= $path["axe_name1"] ;?></option>
                 <option value="<?= $path["axe_id2"] ;?>"><?= $path["axe_name2"] ;?></option>
                 <option value="<?= $path["axe_id3"] ;?>"><?= $path["axe_name3"] ;?></option>
                 </select>
                <?php
                      }
                      ?>
                      <?php
                     ?>
                  
                      </select>
          </div>
          <button type="submit">Add Habit</button>
        
    </form>
</main>
