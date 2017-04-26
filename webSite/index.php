<?php
require_once 'core/Init.php';
$template = new template();

if(isset($_SESSION['id'])) {
    $host  = $_SERVER['HTTP_HOST'];
    $url   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    header("Location: http://$host$url/sakums.php");
}

?>

<!DOCTYPE html>
<html>

  <head>
        <?php template::getMeta(); ?>
           <title><?php $template->showTitle(); ?></title>
        <?php template::getLibs(); ?>
  </head>

  <body>

   <header></header>


            <form class="logIn">
                <h4>Pieslēgšanās logs</h4> <br>

                <div>Lietotājvārds:<br>
                    <input  placeholder="Lietotājvārds" class="pholder" type="text" name = "lietotajvards">
                </div>

                <div>Parole:<br>
                    <input  placeholder="Parole" class="pholder" type="password" name = "parole">
                </div> <br>
                <input class="button" type="submit"  name = "pieslegties" value="Pieslēgties">
            </form> <br>
            <div class="registration">
                <a href="registration.php">Reģistrēties</a>
            </div>


        <footer>
            <p>Izveidojuši: <br> RAM</p>
        </footer>



     <?php template::getJsLibs(); ?>
  </body>
</html>
