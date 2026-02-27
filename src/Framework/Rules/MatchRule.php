<?php

declare(strict_types=1);

namespace Framework\Rules;

use Framework\Contracts\RuleInterface;

class MatchRule implements RuleInterface
{
    public function validate(array $data, string $field, array $param): bool
    {
        $fieldOne = $data[$field];
        $fieldTwo = $data[$param[0]];

        return $fieldOne === $fieldTwo;
    }
    public function getMessage(array $data, string $field, array $param): string
    {
        return "Does Not Match {$param[0]} field";
    }
}
