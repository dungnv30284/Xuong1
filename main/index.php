<?php


$url = $_GET['url'];
switch ($url) {
    case ' ':
        $VIEWNAME = 'login.php';
        break;
    case 'signup':
        $VIEWNAME = 'signup.php';
        break;
    default:
        $VIEWNAME = 'login.php';
        break;
}




include_once('layout.php');
