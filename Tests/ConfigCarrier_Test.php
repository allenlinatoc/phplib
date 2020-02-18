<?php


namespace Allenlinatoc\Tests;
use Allenlinatoc\Config\PHPConfigReader;
use Tester\Assert;

class ConfigCarrier_Test
{

    public $b;


    public function __construct()
    {
        $reader = new PHPConfigReader(ROOT_DIR . '/data/sample-config.php');
        $this->b = new ConfigCarrier($reader);
    }


}