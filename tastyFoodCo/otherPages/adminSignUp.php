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
        <header id="adminHeader">
            <div class="flexHeader">
                <div class="logoContainer">
                    <a href="../index.php">
                        <img src="../media/images/recipeLogo.svg">
                    </a>
                </div>
            </div>
        </header>
        <section class="adminLogin">
        <form action="../includes/signup.inc.php" method="POST" class="adminForm">
            <h2>Sign Up</h2>
            <div class="adminInput">
                <label for="firstName">First Name</label>
                <input type="text" name="firstName">
            </div>
            <div class="adminInput">
                <label for="lastName">Last Name</label>
                <input type="text" name="lastName">
            </div>
            <div class="adminInput">
                <label for="userName">Username</label>
                <input type="text" name="userName">
            </div>
            <div class="adminInput">
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <button type="submit" name="submit">Sign Up</button>
        </form>
        </section>
        
        <?php
        
        // CHECK IF DATABASE IS CONNECTED
        
        
        // $sql = "SELECT * FROM loginusers WHERE firstName='Kyle';";
        // $result = mysqli_query($conn, $sql);
        // $resultCheck = mysqli_num_rows($result);
        // if ($resultCheck > 0) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         echo $row['userName'];
        //     };
        // };


        // INSERT DATA INTO DATABASE
        //
        // $sql = "INSERT INTO loginusers (firstName, lastName, userName, password) VALUES ('Sean', 'Dolphin', 'sdolphin2284', 'seandolphin123');";
        // mysqli_query($conn, $sql);

        ?>

        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>