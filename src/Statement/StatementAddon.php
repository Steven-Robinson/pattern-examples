<?php

namespace App\Statement;

abstract class StatementAddon implements StatementInterface
{
    protected $statement;

    public function __construct(Statement $statement)
    {
        $this->statement = $statement;
    }

    abstract function getDescription(): string;

    abstract function getTotalAmount(): int;
}
