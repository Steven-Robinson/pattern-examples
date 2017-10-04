<?php

namespace App\Statement;

interface StatementInterface
{
    public function getDescription(): string;

    public function getTotalAmount(): int;
}
