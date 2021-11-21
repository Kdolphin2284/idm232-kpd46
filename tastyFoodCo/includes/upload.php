<?php

// include 'dbh.inc.php';

// if (isset($_POST['submit'])) {

//     $recipeName = $_POST['nameOfRecipe'];
//     $cookingLevel = $_POST['cookingLevel'];
//     $recipeRating = $_POST['adminRating'];
//     $prepTime = $_POST['timeToPrep'];
//     $cookTime = $_POST['timeToCook'];
//     $dryIngred = $_POST['dryIngred'];
//     $wetIngred = $_POST['wetIngred'];
//     $directions = $_POST['directions'];
//     $writersNoteAdd = $_POST['writersNoteAdd'];

//     $fileName = ran(1000,10000) . "-" . $_FILES['imageUpload']['name'];

//     $tempName = $_FILES['files']['tmp_name'];

//     $uploadsDirectory = '../uploads';

//     move_uploaded_file($tempName, $uploadsDirectory . '/' . $pname);

//     $sql = "INSERT into recipes(recipeName, difficulty, recipeRating, prepTime, cookTime, dryIngred, wetIngred, recipeImage, directions, writersNote) 
//     VALUES('$recipeName', '$cookingLevel', '$recipeRating', '$prepTime', '$cookTime', '$dryIngred', '$wetIngred', '$fileName', '$directions', '$writersNoteAdd')";

//     if(mysqli_query($conn,$sql)) {
//         echo "File Successfuly Uploaded";
//     } else {
//         echo "Error uploading File";
//     }


// }





// $target_dir = "/media/images";
// $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


// Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }

// Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }

// Check file size
// if ($_FILES["imageUpload"]["size"] > 800000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// } 

// Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//   echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//   $uploadOk = 0;
// }

// Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
//   } else {
//     if (move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
//       echo "The file ". htmlspecialchars( basename( $_FILES["imageUpload"]["name"])). " has been uploaded.";
//     } else {
//       echo "Sorry, there was an error uploading your file.";
//     }
// }


// Not uploading to folder for some reason

// if (isset($_POST['submit'])) {
//     $file = $_FILES['imageUpload'];

    // Check to see if its working
    // print_r($file);

//     $fileName = $_FILES['imageUpload']['name'];
//     $fileTmpName = $_FILES['imageUpload']['tmp_name'];
//     $fileSize = $_FILES['imageUpload']['size'];
//     $fileError = $_FILES['imageUpload']['error'];
//     $fileType = $_FILES['imageUpload']['type'];

//     $fileExt = explode('.', $fileName);
//     $fileActualExt = strtolower(end($fileExt));

//     $allowed = array('jpg', 'jpeg', 'png', 'pdf');

//     if (in_array($fileActualExt, $allowed)) {
//         if ($fileError === 0) {
//             if ($fileSize < 10000000) {
//                 $fileNameNew = uniqid('', true) . "." . $fileActualExt;
//                 $fileDestination = '../uploads/' . $fileNameNew;
//                 move_uploaded_file($fileTempName, $fileDestination);
//                 header("Location: ../otherPages/adminRecipes.php?uploadsuccess");
//             } else {
//                 echo "Unfortunately, your file is too big :(";
//             }
//         } else {
//             echo "Oh no! There was an error uploading your file :(";
//         }
//     } else {
//         echo "Sorry, you cannot upload files of this type :(";
//     }
// }