<?php

namespace App\Statement;

class StatementInsuranceAddon extends StatementAddon
{
    private $insuranceCost;

    public function __construct(Statement $statement)
    {
        parent::__construct($statement);

        $this->insuranceCost = 25;
    }

    function getDescription(): string
    {
        return $this->statement->getDescription() . ' with Insurance added on.';
    }

    function getTotalAmount(): int
    {
        return array_sum([
            $this->statement->getTotalAmount(),
            $this->insuranceCost,
        ]);
    }
}
