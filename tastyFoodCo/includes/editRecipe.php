<?php

// include db connection
include 'dbh.inc.php';


if(isset($_POST['submit'])) {
    $recipeName = htmlspecialchars($_POST['nameOfRecipe'], ENT_QUOTES);
    $cookingLevel = $_POST['cookingLevel'];
    $recipeRating = $_POST['adminRating'];
    $prepTime = $_POST['timeToPrep'];
    $cookTime = $_POST['timeToCook'];
    $dryIngred = htmlspecialchars($_POST['dryIngred'], ENT_QUOTES);
    $wetIngred = htmlspecialchars($_POST['wetIngred'], ENT_QUOTES);
    $directions = htmlspecialchars($_POST['directions'], ENT_QUOTES);
    $writersNote = htmlspecialchars($_POST['writersNoteAdd'], ENT_QUOTES);
    $sameId = $_POST['identification'];
    $imageBase64 = $_POST['base64Image'];
    $query = "UPDATE recipestorage SET recipeName = '$recipeName', cookingLevel = '$cookingLevel', 
    rating = '$recipeRating', prepTime = '$prepTime', cookTime = '$cookTime', dryIngred = '$dryIngred', 
    wetIngred = '$wetIngred', directions = '$directions', writersNote = '$writersNote', foodImage = '$imageBase64' 
    WHERE id = '$sameId'";

    // $query_run = $conn->query($query);
    $query_run = mysqli_query($conn, $query);

}

    if ($query_run) {
        header("Location: ../otherPages/adminRecipes.php?update=success");
    } else {
        header("Location: ../otherPages/adminRecipes.php?update=failure");
    }



// $sql = "SELECT * FROM recipestorage WHERE recipeName=$recipeName";
//             $result = mysqli_query($conn, $sql);

//             echo $result;



// get id of recipe
// $id = $_POST['id'];


// create sql query to delete recipe with respective id
// $sql = "SELECT * FROM recipestorage WHERE id=$id";

// execute the query
// $records = mysqli_query($conn, $sql);

// check whether the query executed successfully 
// if($records==true) {
    // query executed successfully and recipe deleted
    // echo "Recipe was deleted.";
//     $recipeName = $row['nameOfRecipe'];
//     $cookingLevel = $row['cookingLevel'];
//     $recipeRating = $row['adminRating'];
//     $prepTime = $row['timeToPrep'];
//     $cookTime = $row['timeToCook'];
//     $dryIngred = $row['dryIngred'];
//     $wetIngred = $row['wetIngred'];
//     $directions = $row['directions'];
//     $writersNote = $row['writersNoteAdd'];

    
//     header("Location: ../otherPages/adminEditDeleteRecipe.php");

// } else {
     // failed to load recipe
//     echo "Recipe was unable to be loaded, please try again.";
// }

// redirect back to admin recipes page with success message in url



?>