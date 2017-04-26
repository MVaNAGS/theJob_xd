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
        <form class="searchbox col-md-3" action="">
            <input id="search" type="text" placeholder="Ievadi vārdu">
            <input id="submit" type="submit" value="Meklēt">
        </form>
    </div>

        <div class="row">
    <div class="col-md-3 profilePhoto">
        <a href="" data-lightbox="gallery"><img src="" alt="profila bilde" /></a>
        <div class="description" name="">Vārds Uzvārds</div>
    </div> <br>




<div class="col-md-3 col-sm-11 friendsGallery">
    <a href="">
        <img src="http://kids.nationalgeographic.com/content/dam/kids/photos/animals/Mammals/Q-Z/sloth-beach-upside-down.jpg" alt="profils">
    </a>
    <div class="description" name="profileName">Vārds Uzvārds<br><a href="" style="color: blanchedalmond; name=" name="sendMessage">Nosūtīt vēstuli</a></div>
</div>

<div class="col-md-3 col-sm-11 friendsGallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="profileName">Vārds Uzvārds<br><a href="" style="color: blanchedalmond; name=" name="sendMessage">Nosūtīt vēstuli</a></div>
</div>


<div class="col-md-3 col-sm-11 friendsGallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="profileName">Vārds Uzvārds<br><a href="" style="color: blanchedalmond; name=" name="sendMessage">Nosūtīt vēstuli</a></div>
</div>

<div class="col-md-3 col-sm-11 friendsGallery">
    <a href="">
        <img src="" alt="profils">
    </a>
    <div class="description" name="profileName">Vārds Uzvārds<br><a href="" style="color: blanchedalmond; name=" name="sendMessage">Nosūtīt vēstuli</a></div>
</div>
        </div>
    </div>



<div class="page">
    <p>Lapa</p> <a href="" style="color: blanchedalmond"><font color="white">1</a>&nbsp<a href="" style="color: blanchedalmond"><font color="white">2</a></font>
</div>

    <?php template::getJsLibs(); ?>
</body>
</html>


