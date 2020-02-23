<?php


namespace Allenlinatoc\Tests\Config;


use Allenlinatoc\Config\PHPConfigReader;
use Tester\Assert;

class PHPConfigReader_Test
{

    public $instance;
    public $path = ROOT_DIR . "/data/sample-config.php";
    public $args;


    public function __construct($args = [])
    {
        $this->path = realpath($this->path);
        $this->args = $args;
        $this->instance = new PHPConfigReader($this->path, $this->args);
    }

    public function getPath()
    {
        Assert::equal($this->path, $this->instance->getPath());
    }
    
    public function argument_get()
    {
        foreach ($this->args as $k => $v) {
            $this->instance->argument($k, $v);
            Assert::equal($v, $this->instance->argument($k));
            break;
        }
    }
    
    public function argument_null()
    {
        $game = "Call of Duty";
        Assert::error(function() { $this->instance->argument("game"); }, E_NOTICE);
    }
    
    public function argument_set()
    {
        $key = "game";
        $game = "Call of Duty";
        $this->instance->argument($key, $game);
        Assert::equal($this->instance->argument($key), $game);
    }
    public function load()
    {        
        // Manually load data
        $data = require ($this->path);
        // Load data (via instance)
        $this->instance->load($this->path);
        
        // Assert return value of ::load() is an object
        Assert::type("object", $data);

        $loaded_data = $this->instance->getData();
        
        // Assert ::getData() is equal to "manually loaded" $data
        Assert::equal($loaded_data, $data($this->args));
        
        return $loaded_data;
    }
    
    public function read()
    {
        $loaded_data = $this->load();
        $read_data = $this->instance->read();
        Assert::equal($loaded_data, $read_data);
    }

}