<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Allenlinatoc;

/**
 * Description of Str
 *
 * @author Allen
 */
class Str {
    
    static public function concat()
    {
        $result = "";
        $count = func_num_args();
        for ($i=0; $i < $count; $i++) {
            $result = $result . func_get_arg($i);
        }
        return $result;
    }
    
    
    static public function format($str, $args) {
        $args_count = func_num_args();
        $params = [ ];
        $result = $str;
        if ($args_count > 2) {
            for ($i=1; $i < $args_count; $i++) {
                $argval = func_get_arg($i);
                if (is_string($argval)) {
                    $params[strval($i)] = $argval;
                }
            }
        } else {
            if (is_string($args)) {
                $params["0"] = $args;
            } elseif (is_array($args)) {
                foreach ($args as $k => $v) {
                    if (is_string($v)) {
                        $params[$k] = $v;
                    }
                }
            }
        }
        
        foreach ($args as $key => $value) {
            $result = str_replace("{{$key}}", $value, $result);
        }
        
        return $result;
    }
    
}
