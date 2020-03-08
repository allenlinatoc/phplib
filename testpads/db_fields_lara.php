<?php

use Allenlinatoc\CLI\Console;
use Allenlinatoc\JSON;
use Allenlinatoc\Str;
use Allenlinatoc\Tests\DB\Fields\Lara\BigIncrements_Test;
use Allenlinatoc\Tests\DB\Fields\Lara\BigInteger_Test;

// ===========================================================================
Console::resetCounter();
Console::heading1("Testing classes in namespace: Allenlinatoc\\DB\\Fields\\Lara");
// ===========================================================================

Console::indented("Testing BigIncrements", true);
(function() {
    $test = new BigIncrements_Test();
    $test->toParameters();
})();

Console::indented("Testing BigInteger", true);
(function() {
    $test = new BigInteger_Test();
    $test->toParameters();
})();

