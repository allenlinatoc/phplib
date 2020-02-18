<?php


namespace Allenlinatoc\Config\Exceptions;

use Throwable;

class UnknownKeyException extends \Exception
{

    const CODE_DEFAULT = 0;

    public function __construct($key, $code = self::CODE_DEFAULT, Throwable $previous = null)
    {
        parent::__construct("Unknown config key \"$key\" not found", $code, $previous);
    }
}