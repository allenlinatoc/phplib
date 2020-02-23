<?php


namespace Allenlinatoc\Config;


use Allenlinatoc\Exceptions\FileNotFoundException;

class PHPConfigReader implements IConfigReader
{

    /** @var string */
    private $path;
    
    /** @var object */
    private $data;
    
    /** @var object */
    private $args;

    public function __construct($path, array $args = null)
    {
        $this->args = [];
        $this->path = realpath($path);
        //$this->load($this->path);
        if (is_array($args)) {
            $this->args = $args;
        }
    }
    
    /**
     * Get or set an argument
     * 
     * @param string $name Argument's name
     * @param mixed $value [optional] If specified, this method will set argument's value. Otherwise, it will return argument's value.
     * 
     * @return mixed
     */
    public function argument($name, $value = null)
    {
        if (!$value) {
            return $this->args[$name];
        }
        $this->args[$name] = $value;
    }
    
    public function getArguments() {
        return $this->args;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function load($path = null, array $args = null): void
    {
        if (is_null($path)) {
            $path = $this->getPath();
        }
        if (is_null($args)) {
            $args = $this->getArguments();
        }
        if ($path === false) {
            throw new FileNotFoundException($path);
        }
        
        $data = (require $path);
        $this->data = $data($args);
    }


    public function read(): array
    {
        if (is_null($this->data)) {
            $this->load();
            //throw new NotLoadedException("Need to invoke PHPConfigReader::load() first");
        }
        return $this->getData();
    }


    public function getData(): array
    {
        return $this->data;
    }


}