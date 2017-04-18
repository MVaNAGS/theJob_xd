<?php


class template{
    var $webName = "Ram";

    static function getMeta(){
        echo '
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        ';

    }

    static function getLibs(){
        echo '
        <link href="css/lightbox.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        ';
    }

    static function getJsLibs(){
        echo '
       <script src="js/lightbox-plus-jquery.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script type="text/javascript" src="js/jquery-3.1.1.js"></script>
       <script type="text/javascript" src="js/functions.js"></script>
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        ';
    }

    function showTitle(){
        echo $this->webName;
    }

    static function getMenu(){
        echo '
        <nav class="navbar navbar-inverse" style="background-color: darkslategrey;">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="https://en.wikipedia.org/wiki/Random-access_memory" class="navbar-brand"><i>Ram</i></a>
            </div>

            <div class="collapse navbar-collapse" id="mainNavBar">
                <ul class="nav navbar-nav">
                     <li class="izvele"><a href="index.php" style="color: blanchedalmond; font-size: 16px">Sākums</a></li>
                     <li class="izvele"><a href="###" style="color: blanchedalmond; font-size: 16px">Profils</a></li>
                     <li class="izvele"><a href="###" style="color: blanchedalmond; font-size: 16px">Vēstules</a></li>
                </ul>
            </div>
        </div>
    </nav>';
    }
}

?>