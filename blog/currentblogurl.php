<?php
    $url = 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
    echo substr($url,0,-8);
?>
