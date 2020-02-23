<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Allenlinatoc;

/**
 * Description of JSON
 *
 * @author Allen
 */
class JSON
{    
    /**
     * Encode value into a pretty-printed JSON string
     * 
     * @param mixed $v              Value to be encoded
     * @param int $depth
     * @return string
     */
    static public function Pretty($value, int $depth =  512)
    {
        return self::ToJSON($value, JSON_PRETTY_PRINT, $depth);
    }
    
    /**
     * Returns the JSON representation of a value
     * 
     * Returns a string containing the JSON representation of the supplied value.
     * The encoding is affected by the supplied options and additionally the encoding of float values depends on the value of serialize_precision.
     * 
     * @param mixed $value          Value to be encoded
     * @param int $json_options
     * @param int $depth
     * @return string
     */
    static public function ToJSON($value, int $json_options = 0, int $depth = 512): string
    {
        return json_encode($value, $json_options, $depth);
    }
    
    /**
     * Decodes a JSON string
     * 
     * Takes a JSON encoded string and converts it into a PHP variable.
     * 
     * @param string $value
     * @param bool $assoc
     * @param int $depth
     * @param int $options
     * @return mixed
     */
    static public function Parse(string $value, bool $assoc, int $depth, int $options): mixed
    {
        return json_decode($value, $assoc, $depth, $options);
    }
    
}
