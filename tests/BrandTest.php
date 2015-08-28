<?php
    /**
    * @backupGlobals disabled
    * @backupStaticAttributes disabled
    */

    // need one for each class
    require_once "src/Store.php";
    require_once "src/Brand.php";

    // needed to mysql
    $server = 'mysql:host=localhost;dbname=shoes_test';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    // needed for phpunit to actually test 
    class BrandTest extends PHPUnit_Framework_TestCase
    {
?>
