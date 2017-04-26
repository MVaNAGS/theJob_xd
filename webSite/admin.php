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

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <h1><font color="#daa520" size="5px">Dzēst lietotāju:</font></h1>
                        <input type="submit" class="button" value="Dzēst" name="deleteUser">
                </div>
            </div>
        </div>

    <?php template::getJsLibs(); ?>
</body>
</html>
