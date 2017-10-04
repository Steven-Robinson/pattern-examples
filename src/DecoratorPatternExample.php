<?php

namespace App;

use App\Statement\Statement;
use App\Statement\StatementInsuranceAddon;

class DecoratorPatternExample
{
    public function runExample()
    {
        $statement = new Statement();

        $statementWithInsurance = new StatementInsuranceAddon($statement);

        echo $statementWithInsurance->getDescription() . "\n";

        echo 'Total Amount: ' . $statementWithInsurance->getTotalAmount() . "\n";
    }
}
