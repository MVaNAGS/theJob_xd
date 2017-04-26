<?php
require_once 'core/Init.php';
$template = new template();
?>

<!DOCTYPE html>
<html>
<head>
        <?php template::getMeta(); ?>
            <title><?php $template->showTitle(); ?></title>
        <?php template::getLibs(); ?>
</head>
 <body>

 <header>

 </header>

  <form  class="forma" action="register.php" method="POST">

    <br><h4>Reģistrācijas logs</h4>

    <div>Vārds:<br>
        <input id="firstname" placeholder="Vārds" class="pholder" type="text" name = "vards">
    </div> <br>

    <div>Uzvārds:<br>
        <input id="surname" placeholder="Uzvārds" class="pholder" type="text" name = "uzvards">
    </div> <br>

    <div>Lietotājvārds:<br>
        <input id="user" placeholder="Lietotājvārds" class="pholder" type="text" name = "lietotajvards">
    </div> <br>

    <div>Parole:<br>
        <input id="password1" placeholder="Parole" class="pholder" type="password" name = "parole1">
    </div> <br>

    <div>Atkārtot paroli:<br>
        <input id="password2" placeholder="Atkārtot paroli" class="pholder" type="password" name = "parole2">
    </div> <br>


    <div>Epasts:<br>
        <input id="email" placeholder="E-pasts" class="pholder" type="text" name = "epasts">
    </div> <br>

        <input class="button" type="submit" value="Reģistrēties" name = "saglabat">

          <a href="index.php" class="atpakal">Atpakaļ</a>

</form>


     <footer>
         <p>Izveidojuši: <br> RAM</p>
     </footer>


    <?php template::getJsLibs(); ?>
 </body>
</html>
