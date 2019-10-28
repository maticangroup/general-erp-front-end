<?php

$requested_file_name = $_SERVER['REQUEST_URI'];

$document_root = $_SERVER['DOCUMENT_ROOT'];

if ($requested_file_name == '/') {
    $requested_file_name = '/dashboard';
}


$requested_file_path = $document_root . '/pages' . $requested_file_name . '.php';

if (file_exists($requested_file_path)) {

    require 'head.php';
    require 'header.php';
    require $requested_file_path;
    require 'side-bar-right.php';
    require 'footer.php';
    require 'foot.php';

} else {

    $requested_file_name = '/not_found';
    $requested_file_path = $document_root . '/pages' . $requested_file_name . '.php';

    require 'head.php';
    require 'header.php';
    require $requested_file_path;
    require 'side-bar-right.php';
    require 'footer.php';
    require 'foot.php';

}

