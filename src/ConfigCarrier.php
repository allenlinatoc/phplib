<?php

namespace Allenlinatoc;

use Allenlinatoc\Config\Exceptions\UnknownKeyException;
use Allenlinatoc\Config\IConfigReader;

class ConfigCarrier implements \ArrayAccess
{

    private $d = [ ];
    private $reader;


    public function __construct(IConfigReader $reader)
    {
        $this->reader = $reader;
    }


    public function offsetExists($key): bool
    {
        return isset($this->d[$key]);
    }

    public function offsetGet($key): mixed
    {
        if (!$this->offsetExists($key))
        {
            throw new UnknownKeyException($key);
        }
        return $this->d[$key];
    }

    public function offsetSet($key, $value): void
    {
        $this->d[$key] = $value;
    }

    public function offsetUnset($key): void
    {
        if (!$this->offsetExists($key))
        {
            return;
        }
        unset($this->d[$key]);
    }

    public function has(string $key): bool
    {
        return $this->offsetExists($key);
    }


}