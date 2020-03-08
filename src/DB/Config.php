<?php

namespace Allenlinatoc\DB;

/**
 * Class to store Database config
 *
 * @author Allen
 */
class Config
{
    
    public $read,
            $write,
            $driver,
            $database,
            $username,
            $password,
            $charset = 'utf8',
            $collation = 'utf8_unicode_ci',
            $prefix = ''
    ;
    public $assignables = [
        "read",
        "write",
        "driver",
        "database",
        "username",
        "password",
        "charset",
        "collation",
        "prefix"
    ];
            
    
    
    /**
     * Create new instance of Config
     * 
     * @param array $preconfig
     */
    public function __construct(array $preconfig = [])
    {
        if (!empty($preconfig)) {        
            foreach ($this->assignables as $e) {
                if (isset($preconfig[$e])) {
                    $this->{$e} = $preconfig[$e];
                } else {
                    $this->{$e} = null;
                }
            }
        }
    }
    
    /**
     * Convert this instance to associative array
     * 
     * @return array
     */
    public function toArray() : array
    {
        $result = [ ];
        foreach ($this->assignables as $e) {
            $result[$e] = $this->{$e};
        }
        
        return $result;
    }
    
    /**
     * Convert this instance to JSON string
     * 
     * @param boolean $pretty_print     [optional] If returned JSON string should be prettified. Default is false.
     * 
     * @return string
     */
    public function toJSON($pretty_print = false) : string
    {
        return json_encode(
                $this->toArray(), 
                ($pretty_print ? JSON_PRETTY_PRINT :  0)
        );
    }
    
}
