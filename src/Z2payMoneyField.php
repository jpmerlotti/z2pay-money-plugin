<?php

namespace Jpmerlotti\Z2payMoneyField;

use Filament\Forms\Components\Field;

class Z2payMoneyField extends Field
{
    protected static function getFormView(): string
    {
        return 'forms.components.z2pay-money-field';
    }
}
