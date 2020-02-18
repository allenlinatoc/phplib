<?php

namespace Allenlinatoc\Exceptions;

use Throwable;

class FileNotFoundException extends \Exception
{

    const CODE_DEFAULT = 0;

    public function __construct($filepath, $code = self::CODE_DEFAULT, Throwable $previous = null)
    {
        parent::__construct("File not found: \"$filepath\"", $code, $previous);
    }

}