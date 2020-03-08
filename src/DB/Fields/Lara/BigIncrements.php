<?php

namespace Allenlinatoc\DB\Fields\Lara;
use Allenlinatoc\DB\AbstractLaraField;
use Illuminate\Database\Schema\Blueprint;

/**
 * @author Allen
 */
class BigIncrements extends AbstractLaraField
{
    
    public function __construct(string $name = "")
    {
        $this->name = $name;
    }
    
    public function toParameters(): array
    {
        return parent::__toParameters();
    }

    public function getMethod(): string
    {
        return "bigIncrements";
    }

}
