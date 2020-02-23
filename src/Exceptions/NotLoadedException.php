<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Allenlinatoc\Exceptions;

/**
 * Description of NotLoadedException
 *
 * @author Allen
 */
class NotLoadedException extends \Exception {
    
    const CODE_DEFAULT = 0;
    
    /**
     * 
     * @param string $message
     * @param int $code
     * 
     * @param \Throwable $previous
     */
    public function __construct(string $message, int $code = self::CODE_DEFAULT, \Throwable $previous = NULL)
    {
        parent::__construct("Not yet loaded: " + $message, $code, $previous);
    }
    
}
