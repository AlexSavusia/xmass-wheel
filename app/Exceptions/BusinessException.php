<?php

declare(strict_types=1);

namespace App\Exceptions;

use Exception;

final class BusinessException extends Exception
{
    public function __construct(string $message, private readonly array $context)
    {
        parent::__construct($message);
    }

    public function getContext(): array
    {
        return $this->context;
    }
}