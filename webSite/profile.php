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

<div class="col-md-3 profilePhoto">
    <a href="" data-lightbox="gallery"><img src="" alt="profila bilde" /></a>
    <div class="description" name="">Vārds Uzvārds<br><br><a href="correctProfile.php" style="color: blanchedalmond; name=" name="correct"><font color="#daa520">Labot profilu</font></a></div>
  </div> <br>


  <div class="col-md-3 col-sm-11 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
    </div>

<div class="col-md-3 col-sm-11 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
</div>


<div class="col-md-3 col-sm-11 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
</div>

<div class="col-md-3 col-sm-11 gallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="">Vārds Uzvārds</div>
  </div>

        <div class="col-md-3 col-sm-11 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>


        <div class="col-md-3 col-sm-11 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>


        <div class="col-md-3 col-sm-11 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>

        <div class="col-md-3 col-sm-11 gallery">
            <a href="">
                <img src="" alt="profils">
            </a>
            <div class="description" name="">Vārds Uzvārds</div>
        </div>

        </div>
    </div>
<br>

    <div class="container">
        <div class="row">
             <div class="col-md-3 parSevi">
                <h3>Par sevi:</h3>
                <p name="parSevi">bla bla bla bla blabla bla bla bla blabla bla bla bla blabla bla bla bla blabla bla bla bla blabla bla bla bla blabla bla bla bla bla</p

             </div>
        </div>
    </div>



    </div>

<?php template::getJsLibs(); ?>
</body>
</html>


