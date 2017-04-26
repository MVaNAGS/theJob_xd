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

    <ul class="messages">
        <li class="messageList"><a href="">Saņemtās</a></li>
        <li class="messageList"><a href="">Nosūtītās</a></li>
        <li class="messageList"><a href="sakums.php">Nosūtīt</a></li>
    </ul>

<ul class="messages button">
    <li class="bn"><a href="" style="color: blanchedalmond" name="name">Vārds &nbsp Uzvārds</a></li>
    <li class="bn1"><input type="submit" class="button" value="Atbildēt" name="respond"></li>
    <li class="bn1"><input type="submit" class="button" value="Dzēst" name="deleteMessage"></li>
</ul>


<?php template::getJsLibs(); ?>
</body>
</html>
