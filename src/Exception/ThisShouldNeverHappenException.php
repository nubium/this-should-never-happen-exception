<?php

namespace Nubium\Exception;

use Throwable;

class ThisShouldNeverHappenException extends \LogicException
{
    public function __construct($message = '', Throwable $previous = null)
    {
        $message .= '. This should never happen!';
        parent::__construct($message, 0, $previous);
    }
}
