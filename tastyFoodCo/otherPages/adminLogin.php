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
            <form id="adminForm" class="adminForm" method="GET" action="adminRecipes.php">
                <h2>Login</h2>
                <div class="adminInput">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username">
                </div>
                <div class="adminInput">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                <input type="submit" form="adminForm" value="Submit">
            </form>
        </section>
        
        <?php include '../includes/footer.php';?>
        
        <script src="script.js" async defer></script>
    </body>
</html>