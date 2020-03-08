<?php

namespace Allenlinatoc\DB;
use Illuminate\Database\Schema\Blueprint;

/**
 * ILaraField interface
 *
 * @author Allen
 */
interface ILaraField
{
    
    public function getMethod() : string;
    public function warp(Blueprint $blueprint);
    
}
