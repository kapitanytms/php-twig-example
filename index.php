<?php

require_once('vendor/autoload.php');
// loads templates from the file system
$loader = new Twig_Loader_Filesystem('templates');

//$loader = new Twig_Loader_Array(array(
//    'hey' => 'Welcome {{ name }}'
//));

//the central object for storing configuration
$twig = new Twig_Environment($loader, array(
    'cache' => 'cache',
    'debug' => true,
//    'charset' => 'utf-8'
));

$template = $twig->load('index.twig');

class User {
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}

$users = array(
    new User('Tamas', 12),
    new User('John', 12)
);
echo $template->render(
    array(
        'title' => 'Twig',
        'users' => $users,
        'num' => -5

    )
);
//these to are equals
//echo $twig->render('index.twig', array('name' => 'Tamas'));

