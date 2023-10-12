
<?php
foreach($habits as $habit){

?>
<div class="habit" id="<?=$habit["habit_id"];?>">
    <h4><?=$habit["habit_name"];?></h4>
    <div class="info">
        <p>Time : Daily</p>
        <p>Duration: <?=$habit["time_per_day_min"];?></p>
        
       
    </div>
    <button id="addDay">Add a day</button>
    <div class="numb">
        <?php
        for ($i = 1; $i < 31; $i++) {
            if ($habit["atchived_days"] >= $i){
                $class= "number yellew";
            }
            else {
                $class = "number";
            }
            ?>
            <p class="<?= $class;?>"><?=$i;?></p>
            <?php
        }
        ?>
    </div>

</div>
<?php }
?>