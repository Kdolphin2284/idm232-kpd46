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

        <?php include '../includes/adminHeader.php';?>
        <?php include '../includes/dbh.inc.php';?>
        <!-- enctype="multipart/form-data" -->

        <section class="adminAdd">
            <h2>Add Recipe</h2>
            <div class="contentContainer">
                <form action="../includes/recipeInfo.inc.php" method="POST" class="recipeAddForm">
                    <field>
                        <label for="nameOfRecipe">Name of Recipe</label>
                        <input type="text" name="nameOfRecipe" id="nameOfRecipe">
                    </field>
                    <field>
                        <label for="cookingLevel">Cooking Level</label>
                        <select name="cookingLevel" id="cookingLevel">
                            <option value="">Please Choose</option>
                            <option value="Beginner">Beginner</option>
                            <option value="Intermediate">Intermediate</option>
                            <option value="Difficult">Difficult</option>
                        </select>
                    </field>
                    <field>
                        <label for="adminRating">Rating (1-5)</label>
                        <select name="adminRating" id="adminRating">
                            <option value="">Please Choose</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </field>
                    <field>
                        <label for="timeToPrep">Time to Prep</label>
                        <input type="text" name="timeToPrep" id="timeToPrep">
                    </field>
                    <field>
                        <label for="timeToCook">Time to Cook</label>
                        <input type="text" name="timeToCook" id="timeToCook">
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="dryIngred">Dry Ingredients <span>Separate ingredients with ;;</span></label>
                            <textarea id="dryIngred" name="dryIngred" rows="5" cols="50"></textarea>
                        </div>
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="wetIngred">Wet Ingredients <span>Separate ingredients with ;;</span></label>
                            <textarea id="wetIngred" name="wetIngred" rows="5" cols="50"></textarea>
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
                            <textarea id="directions" name="directions" rows="5" cols="50"></textarea>
                        </div>
                    </field>
                    <field class="directionsField">
                        <label for="writersNoteAdd">Writer's Note <span>Separate notes with ;;</span></label>
                        <textarea id="writersNoteAdd" name="writersNoteAdd" rows="5" cols="50"></textarea>
                    </field>
                    <field class="directionsField">
                        <label for="fileUpload">Upload Image</label>
                        <input type="file" name="fileUpload" onchange="updateBase64()" />
                        <input type="hidden" id="base64Image" name="base64Image" />
                    </field>

                    <button type="submit" id="recipeFormSubmit" name="submit">Submit Recipe</button>
                </form>
            </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>


