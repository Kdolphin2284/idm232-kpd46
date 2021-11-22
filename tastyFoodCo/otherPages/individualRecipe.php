<?php include '../includes/dbh.inc.php';?>
<?php

$recipeId = $_GET['id'];



    // Get ID from URL
    $id = $_GET['id'];

    // Select Information from MySQL
    $sql = "SELECT * FROM recipestorage WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    // Set Information to Variables
    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc()) {

        $recipeName = htmlspecialchars_decode($row['recipeName'], ENT_QUOTES);
        $cookingLevel = $row['cookingLevel'];
        $recipeRating = $row['rating'];
        $prepTime = $row['prepTime'];
        $cookTime = $row['cookTime'];
        $dryIngred = explode(";;", htmlspecialchars_decode($row['dryIngred'], ENT_QUOTES));
        $wetIngred = explode(";;", htmlspecialchars_decode($row['wetIngred'], ENT_QUOTES));
        $directions = explode(";;", htmlspecialchars_decode($row['directions'], ENT_QUOTES));
        $writersNote = explode(";;", htmlspecialchars_decode($row['writersNote'], ENT_QUOTES));
        $foodImage = $row['foodImage'];
        $totalTime = $row['prepTime'] + $row['cookTime'];
        }
    }
    

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/all.min.css">
    </head>
    <body>
        
    <?php include '../includes/header.php';?>
    
        <section id="individualHero" style='background: url("<?php echo $foodImage;?>"); background-size: cover; background-position: center;'>
            <h1><?php echo $recipeName;?></h1>
        </section>
        <section class="helpfulInfo">
           <div class="contentContainer">
               <div class="col-60">
                   <div class="individualImage" style="background: url('<?php echo $foodImage;?>'); background-size: cover;"></div>
               </div>
               <div class="col-40">
                   <h2>Helpful Info</h2>
                   <p><span>Difficulty Level: </span><?php echo $cookingLevel; ?></p>
                   <div class="ratingFlex">
                       <p><span>Rating: </span></p>
                       <?php 
                            for($i = 0; $i<$recipeRating; $i++){
                                echo "<img src='../media/images/1Star.svg' alt='Recipe star rating image'>";
                            }
                       ?>
                   </div>
                   <p><span>Time to Prep: </span><?php echo $prepTime;?> minutes</p>
                   <p><span>Time to Cook: </span><?php echo $cookTime;?> minutes</p>
                   <p><span>Total Time: </span> <?php echo ($totalTime);?> minutes</p>
               </div>
           </div>
        </section>
        <section class="ingredients">
           <div class="contentContainer">
                <h2>Ingredients</h2>
                <div class="dryWetFlex">
                    <div class="dry col-1-2">
                        <h4>Dry</h4>
                        <field>
                            <?php 
                                for($i = 0; $i<sizeof($dryIngred); $i++){
                                    $ingred = $dryIngred[$i];
                                    echo "<div class='ingredientCheck'>
                                    <input type='checkbox' id='dryIngredient' name='dryIngredient' value=''>
                                    <label for='dryIngredient'>$ingred</label>
                                </div>";
                                }
                            ?>
                        </field>
                    </div>
                    <div class="wet col-1-2">
                        <h4>Wet</h4>
                        <field>
                            <?php 
                                for($i = 0; $i<sizeof($wetIngred); $i++){
                                    $ingred = $wetIngred[$i];
                                    echo "<div class='ingredientCheck'>
                                    <input type='checkbox' id='wetIngredient' name='wetIngredient' value=''>
                                    <label for='wetIngredient'>$ingred</label>
                                </div>";
                                }
                            ?>
                        </field>
                    </div>
                </div>
           </div>
        </section>
        <section class="directions">
           <div class="contentContainer">
               <div class="directionsLabel">
                   <h2>Directions</h2>
                   <p>*for tips, see "Writer's Notes" below</p>
               </div>

               <?php
                    for($i = 0; $i < count($directions); $i++){
                        $stepNum = $i + 1;
                        $direction = $directions[$i];
                        echo "<div class='directionStep'>
                        <h4>Step $stepNum</h4>
                        <p>$direction</p>
                         <field>
                             <input type='checkbox' id='step$stepNum' name='step$stepNum' value=''>
                             <label for='step$stepNum'>Finished with this step?</label>
                         </field>
                    </div>";
                    }
                                
                ?>
           </div>
        </section>
        <section class="writersNote">
           <div class="contentContainer">
               <div class="col-2-3">
                <h2>Writer's Note</h2>
                <ul>
                <?php 
                    for($i = 0; $i < count($writersNote); $i++){
                        $bullet = $writersNote[$i];
                        echo "<li>$bullet</li>";
                    }
                ?>
                </ul>
               </div>
               <div class="col-1-3" style="background: url('<?php echo $foodImage;?>'); background-size: cover;"></div>
           </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>