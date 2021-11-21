<?php
    include 'dbh.inc.php';

    $first = $_POST['firstName'];
    $last = $_POST['lastName'];
    $user = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "INSERT INTO loginusers (firstName, lastName, userName, password) VALUES ('$first', '$last', '$user', '$password');";
    mysqli_query($conn, $sql);

    header("Location: ../otherPages/adminLogin.php?signup=success");