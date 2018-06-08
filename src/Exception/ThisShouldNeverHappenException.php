<?php

namespace Nubium\Exception;

use Throwable;

class ThisShouldNeverHappenException extends \LogicException
{
    public function __construct(string $message = '', Throwable $previous = null)
    {
        if ($message !== '') {
            $message = rtrim($message, '.') . '. ';
        }
        $message .= 'This should never happen!';
        parent::__construct($message, 0, $previous);
    }
}
