<?php
include('classes/template.php');
$template = new template();
?>

<!DOCTYPE html>
<html>

  <head>
        <?php template::getMeta(); ?>
           <title><?php $template->showTitle(); ?></title>
        <?php template::getLibs(); ?>
  </head>

  <body id="bgcolor">
   <?php template::getMenu(); ?>

    <div class="container-fluid">
        <h1 id="hide">What is Lorem Ipsum?</h1>

        <div class="row">
            <div class="col-md-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>

            <div class="col-md-4">It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
            </div>

            <div class="col-md-4">It was popularised in the 1960s with the release of Letraset sheets containing
                Lorem Ipsum passages,
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>

        </div>

        <br>

        <div class="row">
            <div class="col-md-2 mid">
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged.
         </div>
        </div>

        </br>

            <div class="row">
                <div class="col-md-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>

                <div class="col-md-1">It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </div>

                <div class="col-md-1">It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="col-md-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>

                <div class="col-md-1">It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </div>

                <div class="col-md-1">It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="col-md-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>

                <div class="col-md-1">It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </div>

                <div class="col-md-1">It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
                <div class="col-md-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                </div>

                <div class="col-md-1">It has survived not only five centuries, but also the leap into electronic typesetting,
                    remaining essentially unchanged.
                </div>

                <div class="col-md-1">It was popularised in the 1960s with the release of Letraset sheets containing
                    Lorem Ipsum passages,
                    and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
            </div>


    </div>





    <?php template::getJsLibs(); ?>
  </body>
</html>
