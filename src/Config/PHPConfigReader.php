<?php


namespace Allenlinatoc\Config;


use Allenlinatoc\Exceptions\FileNotFoundException;

class PHPConfigReader implements IConfigReader
{

    /** @var string */
    private $path;
    
    /** @var object */
    private $data;

    public function __construct($path, array $args = [])
    {
        $this->path = realpath($path);
        $this->load($this->path);
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function load($path = null, array $args = []): void
    {
        if (is_null($path))
        {
            $path = $this->getPath();
        }
        if ($path === false)
        {
            throw new FileNotFoundException($path);
        }
        $data = (require $path);
        $this->data = $data;
    }


    public function read(): object
    {
        return $this->getData();
    }


    public function getData(): object
    {
        return $this->data;
    }


}