<?php


/**
 * To execute this test in CLI, execute this command:
 * >    php test.php
 */


define( "ROOT_DIR", __DIR__ );
define( "__TESTPADS", realpath(__DIR__.'/testpads') );


require_once __DIR__.'/vendor/autoload.php';
use Tester\Assert;
use Tester\Environment;
use Allenlinatoc\CLI\Console;
use Allenlinatoc\JSON;
use Allenlinatoc\Str;

Environment::setup();
Console::title("Testing: allenlinatoc/phplib");

require_once __TESTPADS . "/config.php";
require_once __TESTPADS . "/utils.php";
require_once __TESTPADS . "/db_fields_lara.php";
