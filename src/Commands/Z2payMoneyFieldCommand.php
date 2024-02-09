<?php

namespace Jpmerlotti\Z2payMoneyField\Commands;

use Illuminate\Console\Command;

class Z2payMoneyFieldCommand extends Command
{
    public $signature = 'z2pay-money-field';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
