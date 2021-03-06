<?php include '../includes/dbh.inc.php';?>
<?php
    // Select Information from MySQL
    $sql = "SELECT * FROM recipestorage";
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
        <link rel="stylesheet" href="../css/normalize.css">
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/all.min.css">
    </head>
    <body>
        
    <?php include '../includes/dbh.inc.php';?>
    <?php include '../includes/adminHeader.php';?>

        <section class="adminSearch">
            <form action="adminSearchResults.php" method="GET">
                <label for="homeSearch">Looking for a specific recipe?</label>
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

                    if ($conn-> connect_error) {
                        die("Connection failed:" . $conn-> connect_error);
                    }
                    

                    $stars = " Stars";

                    $sql = "SELECT id, recipeName, cookingLevel, rating, foodImage FROM recipestorage";
                    $result = $conn-> query($sql);

                    if ($result-> num_rows > 0) {
                        while ($row = $result-> fetch_assoc()) {

                            $idOfRow = $row['id'];

                            echo "<tr class='styledRow' ><td style='background: url(\"" . $row['foodImage'] . "\"); background-size: cover; background-position: center;'></td><td>" . htmlspecialchars_decode($row['recipeName'], ENT_QUOTES) . "</td><td>" . $row['cookingLevel'] . "</td><td>" . $row['rating'] 
                            . $stars . "</td><td>" . '<a href=adminEditDeleteRecipe.php?id=' . $idOfRow . '>Edit</a>' ."</td><td>" . '<a href=../includes/deleteRecipe.php?id=' . $idOfRow . '>Delete</a>' . "</td></tr>";
                        } 

                        // '<a href=../includes/updateRecipe.php?id=' . $idOfRow . '>Edit</a>' . 

                        echo "</table>";
                    } else {
                        echo "0 results";
                    }


                    $conn-> close();

                    ?>
            </table>
            </div>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>