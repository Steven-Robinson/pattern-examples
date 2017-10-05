<?php

namespace App;

use App\Statement\Statement;
use App\Statement\StatementInsuranceAddon;

class DecoratorPatternExample
{
    public function runExample()
    {
        $statement = new Statement();

        $this->outputStatementDetails($statement);

        $statementWithInsurance = new StatementInsuranceAddon($statement);

        $this->outputStatementDetails($statementWithInsurance);
    }

    private function outputStatementDetails($statement)
    {
        echo $statement->getDescription() . "\n";

        echo 'Total Amount: ' . $statement->getTotalAmount() . "\n";
    }
}
