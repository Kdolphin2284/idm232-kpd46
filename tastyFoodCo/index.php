<?php include 'includes/dbh.inc.php';?>
<?php
    // Select Information from MySQL
    $sql = "SELECT * FROM recipestorage ORDER by id DESC LIMIT 3";
    $result = mysqli_query($conn, $sql);

?>
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
                    <a href="index.php">
                        <img src="media/images/recipeLogo.svg">
                    </a>
                </div>
                <div class="navLinks">
                    <ul>
                        <li>
                            <a href="otherPages/recipes.php">Recipes</a>
                        </li>
                        <li>
                            <a href="otherPages/adminLogin.php">Admin</a>
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
                    <form action="otherPages/searchResults.php">
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
                    <?php
                        while($row = mysqli_fetch_array($result)){
                            $id = $row['id'];
                            $image = $row['foodImage'];
                            $recipeName = htmlspecialchars_decode($row['recipeName'], ENT_QUOTES);
                            $writesNote = htmlspecialchars_decode(substr($row['writersNote'], 0, 50) . "...", ENT_QUOTES);
                            $rating = $row['rating'];
                            $ratingHTML = "";
                            for($i = 0; $i<$rating; $i++){
                                $ratingHTML .= "<img src='media/images/1Star.svg' alt='Recipe star rating image'>";
                            }

                            echo "<div class='foodCard'>
                            <a href='otherPages/individualRecipe.php?id=" . $id . "'>
                                <div class='cardImage' style='background: url(\"" . $image . "\"); background-size: cover;'></div>
                            <div class='cardContent'>
                                <h4>" . $recipeName . "</h4>
                                <div class='recipeStars'>
                                    $ratingHTML
                                </div>
                                <p>" . $writesNote . "</p>
                            </div>
                            </a>
                        </div>";
                        }
                    ?>
                    <!-- <div class="foodCard">
                        <a href="otherPages/individualRecipe.php">
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
                        <a href="otherPages/individualRecipe.php">
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
                        <a href="otherPages/individualRecipe.php">
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
                </div> -->
                <div id="recipeSuggestionsLink">
                    <a href="otherPages/recipes.php">All Recipes</a>
                </div>
            </div>
        </section>
        
        <?php include 'includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>