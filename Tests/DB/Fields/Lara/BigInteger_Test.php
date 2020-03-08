<?php

namespace Allenlinatoc\Tests\DB\Fields\Lara;
use Allenlinatoc\DB\Fields\Lara\BigInteger;
use Tester\Assert;

/**
 * @author Allen
 */
class BigInteger_Test extends \Allenlinatoc\Test\AbstractClassTest
{
    /**
     * @var BigInteger
     */
    public $instance;
    
    public function __construct()
    {
        $this->instance = new BigInteger("votes");
    }
    
    public function toParameters()
    {
        $expected = [ "votes" ];
        $actual = $this->instance->toParameters();
        Assert::equal($expected, $actual);
    }
    
}
