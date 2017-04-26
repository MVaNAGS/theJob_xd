<?php
require_once 'core/Init.php';
$template = new template();
?>

<head>
    <?php template::getMeta(); ?>
        <title><?php $template->showTitle(); ?></title>
    <?php template::getLibs(); ?>
</head>
<body>
    <?php template::getMenu(); ?>

    <div class="container">
        <div class="row">
            <div class="col-md-4 profilePhoto">
                <a href="" data-lightbox="gallery"><img src="" alt="profila bilde" /></a>
            </div> <br>
    <form action="correctProfile.php" method="post" enctype="multipart/form-data">
        <label for="file"><font color="#daa520">Izvēlieties bildi:</font></label>
            <input type="file" name="pic"/>
            <input type="submit" class="button" value="Ielādēt" />
    </form>
        </div>
        <br>
            <div class="row">
                <div class="col-md-4 aboutMe">
                  <form>
                      <h3><font color="#daa520">Pastāsti par sevi:</font></h3>
                        <input type="text"  name="userInfo"/>
                        <input type="submit" class="button" name="aboutMe" value="Saglabāt" />
                  </form>
                </div>
            </div>


     </div>

    <?php template::getJsLibs(); ?>
</body>
</html>
