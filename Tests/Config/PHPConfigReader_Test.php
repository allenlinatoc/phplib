<?php


namespace Allenlinatoc\Tests\Config;


use Allenlinatoc\Config\PHPConfigReader;
use Tester\Assert;

class PHPConfigReader_Test
{

    public $b;
    public $path = ROOT_DIR . "/data/sample-config.php";


    public function __construct()
    {
        $this->path = realpath($this->path);
        $this->b = new PHPConfigReader($this->path);
    }

    public function getPath()
    {
        Assert::equal($this->path, $this->b->getPath());
    }

    public function load()
    {
        $b = $this->b;
        $b->load($this->path);
        $data = require ($this->path);
        
        // Assert load data is an object
        Assert::type("object", $data);

        $loaded_data = $b->getData();
        
        // Assert ::getData() is equal to "manually loaded" $data
        Assert::equal($loaded_data, $data);
        
        return $loaded_data;
    }

}