<?php
    $url = str_replace('.html', '', $_SERVER['REQUEST_URI']);
    header("Location: $url");
    exit();
?>