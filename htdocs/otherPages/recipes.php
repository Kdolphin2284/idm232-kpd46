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
    </head>
    <body>
        <header>
            <div class="flexHeader">
                <div class="logoContainer">
                    <a href="../homepage.html">
                        <img src="../media/images/recipeLogo.svg">
                    </a>
                </div>
                <div class="navLinks">
                    <ul>
                        <li>
                            <a href="recipes.html">Recipes</a>
                        </li>
                        <li>
                            <a href="adminLogin.html">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section id="recipeHero">
            <h1>Recipes</h1>
        </section>
        <section class="resultsSearch">
            <form action="searchResults.html" method="GET">
                <label for="homeSearch">Looking for a specific recipe?</label>
                <input type="search" id="homeSearch" name="homeSearch">
                <img src="../media/images/recipeSearch.svg" alt="Search icon">
            </form>
        </section>
        <section id="recipes">
            <div class="col-1-3">
                <form action="" method="GET" id="filterForm">
                    <div class="filterRecipe">
                        <label for="keywordSearch">Filter Recipes</label>
                        <input id="keywordSearch" name="keywordSearch" type="text">
                        <button>Submit</button>
                    </div>
                    <div class="filteredRecipes">
                        <ul>
                            <li>Chicken</li>
                            <li>Pasta</li>
                        </ul>
                    </div>
                    <div class="filterIngredient">
                        <label for="ingredientSearch">Filter Ingredients</label>
                        <input id="ingredientSearch" name="ingredientSearch" type="text">
                        <button>Submit</button>
                    </div>
                    <div class="filteredIngredients">
                        <ul>
                            <li>Garlic</li>
                            <li>Butter</li>
                        </ul>
                    </div>
                    <div class="formSubmit">
                        <input type="submit" value="Filter Tasty Food" form="filterForm">
                    </div>
                </form>
            </div>
            <div class="col-2-3 recipeFlex">
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Spicy Chicken Wings</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Egg Noodle Stirfry</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Elegant egg noodles cooked with grilled chicken...</p>
                    </div>
                    </a>
                </div>
                <div class="foodCard">
                    <a href="individualRecipe.html">
                        <div class="cardImage"></div>
                    <div class="cardContent">
                        <h4>Cheddar Burger</h4>
                        <div class="recipeStars">
                            <img src="../media/images/recipeStars.svg" alt="Recipe star rating image">
                        </div>
                        <p>Cooked medium, the cheddar burgers tends to surprise...</p>
                    </div>
                    </a>
                </div>
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