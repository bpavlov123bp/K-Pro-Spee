<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>K Pro Speed Tunning Parts</title>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
    <div class="wrapper">
        <aside class="sidebar">
            <div class="logo"><img src="images/logo.jpg" alt="logo" height="110" width="110"></div>

            <hr>
            <nav>
                <ul>
                    <a href="index.php" class="link-element">
                        <li class="single-element"><h3>Home</h3></li>
                    </a>
                    <li class="single-element">
                        <?php
                        $display_block="<h3>Categories</h3>";
                        $get_categ_sql = "SELECT id, parts_categories FROM categories ORDER BY parts_categories";
                        $link_categories = mysqli_query($mysqli, $get_categ_sql) or die (mysqli_error($mysqli));
                        if(mysqli_num_rows($link_categories) < 1){
                            $display_block = "<p><em>Sorry, no categories to browse.</em></p>";
                        }
                        else
                        {
                            while ($categs = mysqli_fetch_array($link_categories))
                            {
                                $id_cat = $categs['id'];
                                $title_cat = $categs['parts_categories'];
                                $display_block .= "<p><strong><a href=\"".$_SERVER['PHP_SELF']."?id=".$id_cat."\">".$title_cat."</a></strong><br></p>";
                            }
                        }
                        echo $display_block;
                        ?></li>
                    <a href="login.php" class="link-element">
                        <li class="single-element"><h3>Login</h3></li>
                    </a>
                    <a href="register.php" class="link-element">
                        <li class="single-element"><h3>Register</h3></li>
                    </a>
                </ul>
            </nav>
        </aside>
        <main>
            <header class="site-title">
                    <h3>Home</h3>
            </header>
            <img src="images/gear_lever.jpg" alt="image not found" width="102" height="102" class="image" >
            <footer>
                <p class="footer-text">
                    &copy; K Pro Speed Foundation
                </p>
            </footer>
        </main>
    </div>
    </body>
</html>
