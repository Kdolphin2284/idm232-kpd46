<?php 
// session_start();
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
        <Script>
            function updateBase64(){
                var file = document.querySelector('input[type=file]')['files'][0];
                var reader = new FileReader();
                var baseString;
                    reader.onloadend = function () {
                    baseString = reader.result;
                    document.getElementById("base64Image").value = baseString;
                    console.log(baseString); 
                };
                reader.readAsDataURL(file);
            }
        </script>
            
    </head>
    <body>

    
    <!-- include '../includes/editRecipe.php'; -->
        <?php include '../includes/adminHeader.php';?>
        <?php include '../includes/dbh.inc.php';?>
        <!-- enctype="multipart/form-data" -->

        <?php

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
                $dryIngred = htmlspecialchars_decode($row['dryIngred'], ENT_QUOTES);
                $wetIngred = htmlspecialchars_decode($row['wetIngred'], ENT_QUOTES);
                $directions = htmlspecialchars_decode($row['directions'], ENT_QUOTES);
                $writersNote = htmlspecialchars_decode($row['writersNote'], ENT_QUOTES);
                $foodImage = $row['foodImage'];
                }
            }
            
        ?>

        <section class="adminAdd">
            <h2>Add Recipe</h2>
            <div class="contentContainer">
                <form action="../includes/editRecipe.php" method="POST" class="recipeAddForm">
                    <field>
                        <label for="nameOfRecipe">Name of Recipe</label>
                        <input value="<?php echo $recipeName; ?>" type="text" name="nameOfRecipe" id="nameOfRecipe">
                    </field>
                    <field>
                        <label for="cookingLevel">Cooking Level</label>
                        <select name="cookingLevel" id="cookingLevel">
                            <option value="<?php echo $cookingLevel; ?>"><?php echo $cookingLevel; ?></option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Difficult">Difficult</option>
                        </select>
                    </field>
                    <field>
                        <label for="adminRating">Rating (1-5)</label>
                        <select name="adminRating" id="adminRating">
                            <option value="<?php echo $recipeRating; ?>"><?php echo $recipeRating; ?></option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </field>
                    <field>
                        <label for="timeToPrep">Time to Prep</label>
                        <input  value="<?php echo $prepTime; ?>" type="text" name="timeToPrep" id="timeToPrep">
                    </field>
                    <field>
                        <label for="timeToCook">Time to Cook</label>
                        <input value="<?php echo $cookTime; ?>" type="text" name="timeToCook" id="timeToCook">
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="dryIngred">Dry Ingredients <span>Separate ingredients with ;;</span></label>
                            <textarea id="dryIngred" name="dryIngred" rows="5" cols="50"><?php echo $dryIngred; ?></textarea>
                        </div>
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="wetIngred">Wet Ingredients <span>Separate ingredients with ;;</span></label>
                            <textarea id="wetIngred" name="wetIngred" rows="5" cols="50"><?php echo $wetIngred; ?></textarea>
                        </div>
                    </field>
                    <!-- <field id="imageUploadField">
                        <label>Image</label>
                        <label for="imageUpload">Upload File</label>
                        <input id="imageUpload" name="imageUpload" type="file">
                    </field> -->
                    <field>
                        <div class="directionsField">
                            <label for="directions">Directions <span>Separate steps with ;;</span></label>
                            <textarea id="directions" name="directions" rows="5" cols="50"><?php echo $directions; ?></textarea>
                        </div>
                    </field>
                    <field class="directionsField">
                        <label for="writersNoteAdd">Writer's Note <span>Separate notes with ;;</span></label>
                        <textarea id="writersNoteAdd" name="writersNoteAdd" rows="5" cols="50"><?php echo $writersNote; ?></textarea>
                    </field>
                    
                    <field class="directionsField">
                        <label for="fileUpload">Upload Image</label>
                        <input type="file" name="fileUpload" onchange="updateBase64()" />
                        <input type="hidden" id="base64Image" name="base64Image" value='<?php echo $foodImage; ?>'/>
                    </field>

                    <button type="submit" id="recipeFormSubmit" name="submit">Update Recipe</button>
                    <input type="hidden" name="identification" value="<?php echo $id; ?>">
                </form>
            </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>




<!-- <!DOCTYPE html>
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
        
    

        <section class="adminAdd">
            <h2>Edit Recipe</h2>
            <div class="contentContainer">
                <form action="adminRecipes.php" method="GET" id="recipeAddForm">
                    <field>
                        <label for="nameOfRecipe">Name of Recipe</label>
                        <input type="text" name="nameOfRecipe" id="nameOfRecipe" value="Spicy Chicken Wings">
                    </field>
                    <field>
                        <label for="cookingLevel">Cooking Level</label>
                        <select name="cookingLevel" id="cookingLevel">
                            <option value="beginner">Beginner</option>
                            <option value="">Please Choose</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="difficult">Difficult</option>
                        </select>
                    </field>
                    <field>
                        <label for="adminRating">Rating (1-5)</label>
                        <select name="adminRating" id="adminRating">
                            <option value="1">1</option>
                            <option value="">Please Choose</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </field>
                    <field>
                        <label for="timeToPrep">Time to Prep</label>
                        <input type="text" name="timeToPrep" id="timeToPrep" value="10 minutes">
                    </field>
                    <field>
                        <label for="timeToCook">Time to Cook</label>
                        <input type="text" name="timeToCook" id="timeToCook" value="25 minutes">
                    </field>
                    <field class="adminAddIngredients">
                        <label for="addIngredients">Ingredients</label>
                        <input type="text" name="addIngredients" id="addIngredients">
                        <div class="dryWetFlex">
                            <div class="radioFlex">
                                <input type="radio" name="dryRadio" id="dryRadio">
                                <label for="dryRadio">Dry</label>
                            </div>
                            <div class="radioFlex">
                                <input type="radio" name="dryRadio" id="dryRadio">
                                <label for="dryRadio">Wet</label>
                            </div>
                        </div>
                        <input type="submit" value="Add" name="ingredientSubmit" id="ingredientSubmit">
                    </field>
                    <div class="dryWetContainer">
                        <div class="dryWetBox">
                            <h3>Dry Ingredients</h3>
                            <ul>
                                <li>2 tbspn Crushed Red Pepper</li>
                                <li>1 tbsp Garlic Powder</li>
                                <li>1 tbsp Onion Powder</li>
                                <li>1/2 tbsp Salt</li>
                                <li>1 tbsp Pepper</li>
                                <li>2 tbsp Cayenne Pepper</li>
                                <li>20 Chicken Wings</li>
                            </ul>
                        </div>
                        <div class="dryWetBox">
                            <h3>Wet Ingredients</h3>
                            <ul>
                                <li>2 tbsp Siracha</li>
                                <li>1 1/2 tbsp Olive Oil</li>
                            </ul>
                        </div>
                    </div>
                    <field>
                        <label>Image</label>
                        <div class="imagePreview"></div>
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="directionsAdd">Directions</label>
                            <textarea id="directionsAdd" name="directionsAdd" rows="5" cols="50"></textarea>
                        </div>
                        <input type="submit" value="Add Step" id="directionsAddSubmit" name="directionsAddSubmit">
                        <div class="directionsAddStep">
                            <ul>
                                <li>Step 1 - Lorem ipsum dolor dit amet...</li>
                                <li>Step 2 - Lorem ipsum dolor dit amet...</li>
                                <li>Step 3 - Lorem ipsum dolor dit amet...</li>
                                <li>Step 4 - Lorem ipsum dolor dit amet...</li>
                                <li>Step 5 - Lorem ipsum dolor dit amet...</li>
                            </ul>
                        </div>
                    </field>
                    <field>
                        <label for="writersNoteAdd">Writer's Note</label>
                        <textarea id="writersNoteAdd" name="writersNoteAdd" rows="5" cols="50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam faucibus nisl et massa egestas tristique. 
                        </textarea>
                    </field>
                    <div class="adminButtonFlex">
                        <input type="submit" value="Save Edits" id="recipeFormSubmit" name="recipeFormSubmit" form="recipeAddForm">
                        <input type="submit" value="Delete Recipe" id="recipeFormSubmit" name="recipeFormSubmit" form="recipeAddForm">
                    </div>
                </form>
            </div>
        </section>
        
        
        
        <script src="script.js" async defer></script>
    </body>
</html> -->