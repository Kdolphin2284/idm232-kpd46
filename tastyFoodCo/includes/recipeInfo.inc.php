<?php
    include 'dbh.inc.php';


    // $recipeName = $_POST['nameOfRecipe'];
    // $cookingLevel = $_POST['cookingLevel'];
    // $recipeRating = $_POST['adminRating'];
    // $prepTime = $_POST['timeToPrep'];
    // $cookTime = $_POST['timeToCook'];
    // $dryIngred = $_POST['dryIngred'];
    // $wetIngred = $_POST['wetIngred'];
    // $directions = $_POST['directions'];
    // $writersNoteAdd = $_POST['writersNoteAdd'];


    // $sql = "INSERT INTO recipeStorage (nameOfRecipe, cookingLevel, adminRating, timeToPrep, timeToCook, dryIngred, wetIngred, directions, writersNoteAdd) VALUES ('$recipeName', '$cookingLevel', '$recipeRating', '$prepTime', '$cookTime', '$dryIngred', '$directions', '$writersNoteAdd');";
    // mysqli_query($conn, $sql);

    // header("Location: ../otherPages/adminRecipes.php?recipe=success");

    if(isset($_POST['submit'])) {

        $recipeName = $_POST['nameOfRecipe'];

        $cookingLevel = $_POST['cookingLevel'];
        $recipeRating = $_POST['adminRating'];

        $prepTime = $_POST['timeToPrep'];
        $cookTime = $_POST['timeToCook'];
        $dryIngred = $_POST['dryIngred'];
        $wetIngred = $_POST['wetIngred'];
        $directions = $_POST['directions'];
        $writersNoteAdd = $_POST['writersNoteAdd'];
        
        $imageBase64 = $_POST['base64Image'];
        //todo ^^^ store this and put it in <img src="HERE" />
        
        $query = "INSERT INTO recipestorage (recipeName, cookingLevel, rating, prepTime, cookTime, dryIngred, wetIngred, directions, writersNote, foodImage) 
                  VALUES ('$recipeName', '$cookingLevel', '$recipeRating', '$prepTime', '$cookTime', '$dryIngred', '$wetIngred', '$directions', '$writersNoteAdd', '$imageBase64')";

        $query_run = mysqli_query($conn, $query);

        if ($query_run) {
            header("Location: ../otherPages/adminRecipes.php?upload=success");
        } else {
            header("Location: ../otherPages/adminRecipes.php?upload=failure");
        }

    }