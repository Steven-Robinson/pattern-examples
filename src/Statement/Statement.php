<?php

namespace App\Statement;

class Statement implements StatementInterface
{
    public function getDescription(): string
    {
        return 'This is a statement.';
    }

    public function getTotalAmount(): int
    {
        return array_sum([
            $this->getRentalAmount(),
            $this->getSupplementalAmount(),
        ]);
    }

    protected function getRentalAmount(): int
    {
        return 200;
    }

    protected function getSupplementalAmount(): int
    {
        return 100;
    }
}
