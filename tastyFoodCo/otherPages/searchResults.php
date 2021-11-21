<?php include '../includes/dbh.inc.php';?>
<?php
    // Select Information from MySQL
    $sql = "SELECT * FROM recipestorage";
    $result = mysqli_query($conn, $sql);
    $query = $_GET['homeSearch'];

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
    </head>
    <body>
        
    <?php include '../includes/header.php';?>

        <section id="searchHero">
            <h1>Search Results</h1>
        </section>
        <section class="resultsSearch">
            <form>
                <label for="homeSearch">Here are your results, happy cheffing!</label>
                <input type="search" id="homeSearch" name="homeSearch" value="<?php echo $query;?>">
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
                        <ul></ul>
                    </div>
                    <div class="filterIngredient">
                        <label for="ingredientSearch">Filter Ingredients</label>
                        <input id="ingredientSearch" name="ingredientSearch" type="text">
                        <button>Submit</button>
                    </div>
                    <div class="filteredIngredients">
                        <ul></ul>
                    </div>
                    <div class="formSubmit">
                        <input type="submit" value="Filter Tasty Food" form="filterForm">
                    </div>
                </form>
            </div>
            <div class="col-2-3 recipeFlex">
            <?php

            
                        while($row = mysqli_fetch_array($result)){
                            // echo "test";
                            $id = $row['id'];
                            $image = $row['foodImage'];
                            $recipeName = htmlspecialchars_decode($row['recipeName'], ENT_QUOTES);
                            $writesNote = htmlspecialchars_decode(substr($row['writersNote'], 0, 50) . "...", ENT_QUOTES);
                            // echo $recipeName;
                            // echo $writesNote;
                            // echo $query;
                            if(!str_contains(strtoupper($recipeName), strtoupper($query) ) && !str_contains(strtoupper($writesNote), strtoupper($query) )){
                                continue;
                            }
                            // var_dump($row);
                            $rating = $row['rating'];
                            $ratingHTML = "";
                            for($i = 0; $i<$rating; $i++){
                                $ratingHTML .= "<img src='../media/images/1Star.svg' alt='Recipe star rating image'>";
                            }

                            echo "<div class='foodCard'>
                            <a href='individualRecipe.php?id=" . $id . "'>
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
            </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>