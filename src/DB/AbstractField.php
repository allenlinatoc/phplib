<?php

namespace Allenlinatoc\DB;

/**
 * Abstract representing a Field
 *
 * @author Allen
 */
abstract class AbstractField implements IField
{
    
    protected $name;
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function setName(string $name)
    {
        $this->name = $name;
    }

    protected function __toParameters(): array {
        return [
            $this->name
        ];
    }

}
