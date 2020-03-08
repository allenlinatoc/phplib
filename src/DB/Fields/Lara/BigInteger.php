<?php

namespace Allenlinatoc\DB\Fields\Lara;
use Allenlinatoc\DB\AbstractLaraField;

/**
 * @author Allen
 */
class BigInteger extends AbstractLaraField
{
    
    public function __construct(string $name = null)
    {
        $this->setName($name);
    }
    
    public function getMethod(): string
    {
        return "bigInteger";
    }

    public function toParameters(): array
    {
        return parent::__toParameters();
    }

    
}
