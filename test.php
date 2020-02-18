<?php


/**
 * To execute this test in CLI, execute this command:
 * >    php test.php
 */


define( "ROOT_DIR", __DIR__ );


require_once __DIR__.'/vendor/autoload.php';
use Tester\Assert;
use Tester\Environment;
use Allenlinatoc\Tests\Console;

Environment::setup();

Console::title("Testing: allenlinatoc/phplib");


/**
 * PHPConfigReader
 */
Console::heading1("Class: PHPConfigReader");
(function($s) {

    // Test constructor for errors
    $test = new \Allenlinatoc\Tests\Config\PHPConfigReader_Test();

    Assert::notNull($test, '$test'." is not null");
    Console::indented("Constructor works fine!", true);

    $test->getPath();
    Console::indented("getPath() passed", true);

    $data = $test->load();
    Console::indented("load() passed", true);
    dd($data);
    
    Console::indented("Loaded_data: " . json_encode($data, JSON_PRETTY_PRINT), true);
    
    $needles = array(
        'name' => 'John Doe',
        'description' => ''
    );

})("Test input string here");

