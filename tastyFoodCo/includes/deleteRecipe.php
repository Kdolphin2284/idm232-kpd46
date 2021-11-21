<?php

// include db connection
include 'dbh.inc.php';

// get id of recipe
$id = $_GET['id'];

// create sql query to delete recipe with respective id
$sql = "DELETE FROM recipestorage WHERE id=$id";

// execute the query
$res = mysqli_query($conn, $sql);

// check whether the query executed successfully 
if($res==true) {
    // query executed successfully and recipe deleted
    // echo "Recipe was deleted.";
    // $_SESSION['delete'] = "Recipe Deleted Successfully";

    header("Location: ../otherPages/adminRecipes.php");

} else {
    // failed to delete recipe
    echo "Recipe was unable to be deleted, please try again.";
}

// redirect back to admin recipes page with success message in url



?>