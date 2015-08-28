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

function that point to use index.html.twig
//CRUD
app get id stores
app patch id  if statement!
app get store id

app get /stores
app post /stores
app delete stores
app add a new store

app post get a new brand?
app get /brands
app post brands
del brands
get brand id?


return $app;
  ?>
