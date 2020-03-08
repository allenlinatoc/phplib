<?php

namespace Allenlinatoc\DB;

/**
 * Abstract representing a Laravel/Illuminate field
 *
 * @author Allen
 */
abstract class AbstractLaraField extends AbstractField implements ILaraField
{
    
    /**
     * Get method name
     * 
     * @return string
     */
    abstract function getMethod() : string;
    
    public function warp(\Illuminate\Database\Schema\Blueprint $blueprint)
    {
        $method = $this->getMethod();
        call_user_func_array($blueprint->{$method}, $this->toParameters());
    }

}
