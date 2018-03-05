<?php

require_once('vendor/autoload.php');

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache'
));

$template = $twig->load('index.html');
echo $template->render(array('name' => 'Tamas'));

