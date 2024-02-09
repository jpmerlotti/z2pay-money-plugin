<?php

namespace Jpmerlotti\Z2payMoneyField;

use Filament\Forms\Components\Field;

class Z2payMoneyField extends Field
{
    protected string $view = 'forms.components.z2pay-money-field';

    protected function setUp(): void
    {
        parent::setUp();
    }
}
