<?php

    function linkCss($path)
    {
        $url = BASE_URL . "/" . $path;
        echo'<link rel="stylesheet" href="'. $url .'">';
    }

    function linkJs($path)
    {
        $url = BASE_URL . "/" . $path;
        echo '<script src="'. $url .'"></script>';
    }

?>