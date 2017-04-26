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
        <?php template::getMenu(); ?>

<div class="container">
    <div class="row">

        <div class="chatContainer">

            <div class="chatHeader">
                <h3><font color="#BDB76B">Sveicināti</font></h3>
            </div>
            <div class="col-md-3 messagePhoto">
                <a href="" data-lightbox="gallery"><img class="img-responsive"src="" alt="profila bilde" /></a>
                <p class="desc" name="profileName">Vārds Uzvārds</p><br>
            </div>
            <div class="chatMessages"></div>
            <div class="chatBottom">
                <form action="#" onSubmit="return false;" id="chatForm">
                    <input type="hidden" id="name" />
                    <input type="text" name="text" id="text" value="" placeholder="Ievadiet ziņu"/>
                    <input type="submit" name="submit" value="Nosūtīt" />
                </form>
            </div>
        </div>

        </div>
    </div>


        <?php template::getJsLibs(); ?>
    </body>
</html>
