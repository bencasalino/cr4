<?php
    //need one for each class
    require_once __DIR__."/../src/Brand.php";
    require_once __DIR__."/../src/Store.php";
    require_once __DIR__."/../vendor/autoload.php";

    // needed to use silex
    $app = new Silex\Application();

    // turns on debuuger for terminal
    $app['debug'] = true;

    //login for phpmyadmin
    $server = 'mysql:host=localhost;dbname=shoes';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    // must have to run php tests
    use Symfony\Component\HttpFoundation\Request;
    Request::enableHttpMethodParameterOverride();

    //pointing twig towards the views folder
  $app->register(new Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views'
  ));



  add getters and setters that passed in tests, and begin to add CRUD as you slowly buid out the views folder! 


  ?>
