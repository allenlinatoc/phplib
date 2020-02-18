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
        $this->path = realpath($path);
        $this->load($this->path);
        if (is_object($args)) {
            foreach ($args as $key => $value) {
                $this->args[$key] = $value;
            }
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
    public function arg($name, $value = null): mixed
    {
        if (!$value) {
            return $this->args[$name];
        }
        $this->args[$name] = $value;
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
        if ($path === false) {
            throw new FileNotFoundException($path);
        }
        $data = (require $path);
        $this->data = $data($args);
    }


    public function read(): array
    {
        return $this->getData();
    }


    public function getData(): array
    {
        return $this->data;
    }


}