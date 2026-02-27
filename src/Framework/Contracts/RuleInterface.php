<?php

declare(strict_types=1);

namespace Framework\Contracts;

use Exception;

interface RuleInterface
{
    public function validate(array $data, string $field, array $param): bool;

    public function getMessage(array $data, string $field, array $param): string;
}
