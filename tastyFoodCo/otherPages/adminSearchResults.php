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
        <link rel="stylesheet" href="../css/all.min.css">
    </head>
    <body>
        
    <?php include '../includes/adminHeader.php';?>

        <section class="adminSearch">
            <form>
                <label for="homeSearch">Here are your results, happy admining!</label>
                <input type="search" id="homeSearch" name="homeSearch">
                <img src="../media/images/recipeSearch.svg" alt="Search icon">
            </form>
        </section>
        <section class="adminRecipes">
            <h2>Recipes</h2>
            <div class="contentContainer">
                <table class="adminTable">
                    <tr class="blankRow">
                        <th></th>
                        <th>Recipe Name</th>
                        <th>Cooking Level</th>
                        <th>Rating</th>
                        <th></th>
                    </tr>
                    <?php
                        while($row = mysqli_fetch_array($result)){
                            $id = $row['id'];
                            $image = $row['foodImage'];
                            $recipeName = $row['recipeName'];
                            $writesNote = substr($row['writersNote'], 0, 50) . "...";
                            if(!str_contains(strtoupper($recipeName), strtoupper($query) ) && !str_contains(strtoupper($writesNote), strtoupper($query) )){
                                continue;
                            };
                            $rating = $row['rating'];

                        echo "<tr class='styledRow' ><td style='background: url(\"" . $row['foodImage'] . "\"); background-size: cover; background-position: center;'></td><td>" . htmlspecialchars_decode($row['recipeName'], ENT_QUOTES) . "</td><td>" . $row['cookingLevel'] . "</td><td>" . $row['rating'] 
                            . $stars . "</td><td>" . '<a href=adminEditDeleteRecipe.php?id=' . $id . '>Edit</a>' ."</td><td>" . '<a href=../includes/deleteRecipe.php?id=' . $id . '>Delete</a>' . "</td></tr>";
                        } 
                        
                    ?>
                </table>
            </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>