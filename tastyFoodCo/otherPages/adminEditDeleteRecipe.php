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