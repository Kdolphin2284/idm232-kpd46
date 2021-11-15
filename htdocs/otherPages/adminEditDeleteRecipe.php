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
            <h2>Edit Recipe</h2>
            <div class="contentContainer">
                <form action="adminRecipes.html" method="GET" id="recipeAddForm">
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