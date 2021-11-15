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
        <header id="adminHeader">
            <div class="flexHeader">
                <div class="logoContainer">
                    <a href="../homepage.html">
                        <img src="../media/images/recipeLogo.svg">
                    </a>
                </div>
                <div class="navLinks">
                    <ul>
                        <li>
                            <a href="adminAddRecipe.html">Add Recipe</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section class="adminAdd">
            <h2>Add Recipe</h2>
            <div class="contentContainer">
                <form action="adminRecipes.html" method="GET" id="recipeAddForm">
                    <field>
                        <label for="nameOfRecipe">Name of Recipe</label>
                        <input type="text" name="nameOfRecipe" id="nameOfRecipe">
                    </field>
                    <field>
                        <label for="cookingLevel">Cooking Level</label>
                        <select name="cookingLevel" id="cookingLevel">
                            <option value="">Please Choose</option>
                            <option value="beginner">Beginner</option>
                            <option value="intermediate">Intermediate</option>
                            <option value="difficult">Difficult</option>
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
                                <li></li>
                            </ul>
                        </div>
                        <div class="dryWetBox">
                            <h3>Wet Ingredients</h3>
                            <ul>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                    <field>
                        <label>Image</label>
                        <label for="imageUpload">Upload File</label>
                        <input id="imageUpload" name="imageUpload" type="file">
                    </field>
                    <field>
                        <div class="directionsField">
                            <label for="directionsAdd">Directions</label>
                            <textarea id="directionsAdd" name="directionsAdd" rows="5" cols="50"></textarea>
                        </div>
                        <input type="submit" value="Add Step" id="directionsAddSubmit" name="directionsAddSubmit">
                        <div class="directionsAddStep">
                            <ul></ul>
                        </div>
                    </field>
                    <field>
                        <label for="writersNoteAdd">Writer's Note</label>
                        <textarea id="writersNoteAdd" name="writersNoteAdd" rows="5" cols="50"></textarea>
                    </field>
                    <input type="submit" value="Submit Recipe" id="recipeFormSubmit" name="recipeFormSubmit" form="recipeAddForm">
                </form>
            </div>
        </section>
        <footer>
            <div class="footerLogo">
                <img src="../media/images/recipeFooterLogo.svg" alt="Footer logo for this website, TF  |  Tasty Food Co." class="desktopFooter">
                <img src="../media/images/footerLogoTablet.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="tabletFooter">
                <img src="../media/images/mobileFooterLogo.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="mobileFooter">
            </div>
        </footer>
        
        <script src="script.js" async defer></script>
    </body>
</html>