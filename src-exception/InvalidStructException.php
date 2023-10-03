<?php

declare(strict_types=1);

namespace Struct\Exception;

use LogicException;
use Throwable;

final class InvalidStructException extends LogicException
{
    public function __construct(string $message, int $code, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
