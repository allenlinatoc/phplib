<?php

use Allenlinatoc\CLI\Console;
use Allenlinatoc\JSON;
use Allenlinatoc\Str;
use Tester\Assert;

/**
 * PHPConfigReader
 */
Console::heading1("Class: PHPConfigReader");

$args = [
    "name" => "Allen",
    "position" => "Developer"
];

Console::indented(Str::concat("Plugging test arguments: ", JSON::Pretty($args)));

(function($args) {
    // Test constructor for errors
    $test = new \Allenlinatoc\Tests\Config\PHPConfigReader_Test($args);

    // Test constructor
    Assert::notNull($test, '$test'." is not null");
    Console::indented("Constructor works fine!", true);

    // Test ::getPath()
    $test->getPath();
    Console::indented("getPath() passed", true);
    
    // Test Get via ::argument()
    $test->argument_get();
    Console::indented("Get argument via ::argument() passed", true);
    
    // Test Null via ::argument()
    $test->argument_null();
    Console::indented("Null argument via ::argument() passed", true);
    
    // Tesst Set via ::argument()
    $test->argument_set();
    Console::indented("Set argument via ::argument() passed", true);

    // Test ::load()
    $data = $test->load();
    Console::indented("load() passed", true);    
    // Console::indented("Loaded_data: " . json_encode($data, JSON_PRETTY_PRINT), true);
    
    // Test ::read()
    $test->read();
    Console::indented("read() passed", true);

})($args);