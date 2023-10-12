

<link rel="stylesheet" href="../../../public/css/style.css" >

<main>
    <h1>Creat New path</h1>
    <form action="/index.php?controller=path&action=addPath" method="POST" class="form">
        <div class="culmn">
            <label for="pathName">path</label>
            <input type="text" name="pathName">
        </div>
        <div class="culmn">
            <label for="details">Details</label>
            <textarea name="details" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="culmn">
            <label for="axe1">First Axe</label>
            <select name="axe1" id="axe1">
                <?php
                foreach($axes as $axe){
                   ?>
                    <option value="<?= $axe["axe_id"] ;?>"><?= $axe["axe_name"] ;?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="culmn">
            <label for="axe2">Second Axe</label>
            <select name="axe2" id="axe2">
                <?php
                foreach($axes as $axe){
                   ?>
                   <option value="<?= $axe["axe_id"] ;?>"><?= $axe["axe_name"] ;?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <div class="culmn">
            <label for="axe3">Third Axe</label>
            <select name="axe3" id= "axe3">
                <?php
                foreach($axes as $axe){
                   ?>
                    <option value="<?= $axe["axe_id"] ;?>"><?= $axe["axe_name"] ;?></option>
                    <?php
                }
                ?>
            </select>
        </div>
        <button type="submit">Create your path</button>
    
    
    
    </form>
</main>