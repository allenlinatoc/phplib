<?php

use Allenlinatoc\CLI\Console;
use Allenlinatoc\JSON;
use Allenlinatoc\Str;
use Tester\Assert;

/**
 * PHPConfigReader
 */
Console::heading1("Class: Allenlinatoc\\DB\\Config");

$args = [
    'read' => [
        'host' => '192.168.1.1',
    ],
    'write' => [
        'host' => '196.168.1.2'
    ],
    'driver'    => 'mysql',
    'database'  => 'database',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
];

Console::indented(Str::concat("Plugging test arguments: ", JSON::Pretty($args)));

(function($args) {
    
    $test = new Allenlinatoc\DB\Config($args);
    
})($args);
