<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <div class="flexHeader">
                <div class="logoContainer">
                    <a href="homepage.html">
                        <img src="media/images/recipeLogo.svg">
                    </a>
                </div>
                <div class="navLinks">
                    <ul>
                        <li>
                            <a href="otherPages/recipes.html">Recipes</a>
                        </li>
                        <li>
                            <a href="otherPages/adminLogin.html">Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <section id="hero">
            <div id="heroContainer">
                <div class="heroPositioning">
                    <h1>Tasty Food Co.</h1>
                </div>
                <div class="heroPositioning">
                    <form action="otherPages/searchResults.html">
                        <label for="homeSearch">Looking for a specific recipe?</label>
                        <input type="search" id="homeSearch" name="homeSearch">
                        <img src="media/images/recipeSearch.svg" alt="Search icon">
                    </form>
                </div>
                <div class="heroPositioning">
                    <div id="heroArrow">
                        <h2>Simple recipes made easy</h2>
                        <img src="media/images/recipeArrow.svg" alt="Arrow pointing downward">
                    </div>
                </div>
            </div>
        </section>
        <section id="homeRecipeSuggestions">
            <div class="contentContainer">
                <h2>Browse our Great Assortment of <span>Home-Recipes</span></h2>
                <div id="recipeSuggestionsContainer">
                    <div class="foodCard">
                        <a href="otherPages/individualRecipe.html">
                            <div class="cardImage"></div>
                        <div class="cardContent">
                            <h4>Spicy Chicken Wings</h4>
                            <div class="recipeStars">
                                <img src="media/images/recipeStars.svg" alt="Recipe star rating image">
                            </div>
                            <p>Crispy, spicy chicken wings are always a crowd pleaser...</p>
                        </div>
                        </a>
                    </div>
                    <div class="foodCard">
                        <a href="otherPages/individualRecipe.html">
                            <div class="cardImage"></div>
                        <div class="cardContent">
                            <h4>Egg Noodle Stirfry</h4>
                            <div class="recipeStars">
                                <img src="media/images/recipeStars.svg" alt="Recipe star rating image">
                            </div>
                            <p>Elegant egg noodles cooked with grilled chicken, tomatoes...</p>
                        </div>
                        </a>
                    </div>
                    <div class="foodCard">
                        <a href="otherPages/individualRecipe.html">
                            <div class="cardImage"></div>
                        <div class="cardContent">
                            <h4>Cheddar Burger</h4>
                            <div class="recipeStars">
                                <img src="media/images/recipeStars.svg" alt="Recipe star rating image">
                            </div>
                            <p>Cooked medium, the cheddar burger tends to surprise...</p>
                        </div>
                        </a>
                    </div>
                </div>
                <div id="recipeSuggestionsLink">
                    <a href="otherPages/recipes.html">All Recipes</a>
                </div>
            </div>
        </section>
        <footer>
            <div class="footerLogo">
                <img src="media/images/recipeFooterLogo.svg" alt="Footer logo for this website, TF  |  Tasty Food Co." class="desktopFooter">
                <img src="media/images/footerLogoTablet.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="tabletFooter">
                <img src="media/images/mobileFooterLogo.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="mobileFooter">

            </div>
        </footer>
        
        <script src="script.js" async defer></script>
    </body>
</html>