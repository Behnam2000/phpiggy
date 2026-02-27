<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class InRule implements RuleInterface
{
    public function validate(array $data, string $field, array $param): bool
    {
        return in_array($data[$field], $param);
    }

    public function getMessage(array $data, string $field, array $param): string
    {
        return "Invalid selection";
    }
}
