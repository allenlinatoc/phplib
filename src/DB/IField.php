<?php

namespace Allenlinatoc\DB;

/**
 * IColumn interface
 *
 * @author Allen
 */
interface IField
{
    
    public function getName() : string;
    public function toParameters() : array;
    
}
