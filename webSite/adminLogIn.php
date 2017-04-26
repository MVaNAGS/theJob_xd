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

<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Pieslēgties
</button>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Pieslēgties</h4>
            </div> 

            <div class="modal-body">
                <form role="form">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" id="uLogin" placeholder="Lietotājvārds" name="adminName">
                            <label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" class="form-control" id="uPassword" placeholder="Parole" name="adminPassw">
                            <label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
                        </div> 
                    </div> 

                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Atcerēties mani
                        </label>
                    </div> 
                </form>

            </div> 

            <div class="modal-footer">
                <button class="form-control btn btn-primary">Ok</button>

                <div class="progress">
                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="100" style="width: 0%;">
                        <span class="sr-only">progress</span>
                    </div>
                </div>
            </div> 

        </div>
    </div>
</div>


<?php template::getJsLibs(); ?>
</body>
</html>
