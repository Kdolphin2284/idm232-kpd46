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
                    <a href="../homepage.html">
                        <img src="../media/images/recipeLogo.svg">
                    </a>
                </div>
            </div>
        </header>
        <section id="adminLogin">
            <form id="adminForm" method="GET" action="adminRecipes.html">
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
        <footer>
            <div class="footerLogo">
                <img src="../media/images/recipeFooterLogo.svg" alt="Footer logo for this website, TF  |  Tasty Food Co." class="desktopFooter">
                <img src="../media/images/footerLogoTablet.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="tabletFooter">
                <img src="../media/images/mobileFooterLogo.png" alt="Footer logo for this website, TF  |  Tasty Food Co." class="mobileFooter">
            </div>
        </footer>
        
        <script src="script.js" async defer></script>
    </body>
</html>