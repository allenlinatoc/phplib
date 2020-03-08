<?php

namespace Allenlinatoc\Tests\DB\Fields\Lara;
use Allenlinatoc\DB\Fields\Lara\BigIncrements;
use Tester\Assert;

/**
 * @author Allen
 */
class BigIncrements_Test extends \Allenlinatoc\Test\AbstractClassTest
{
    /**
     * @var BigIncrements
     */
    public $instance;

    public function __construct()
    {
        $this->instance = new BigIncrements("id");
    }
    
    public function toParameters()
    {
        $expected = [ "id" ];
        $actual = $this->instance->toParameters();
        Assert::equal($expected, $actual);
    }
    
}
