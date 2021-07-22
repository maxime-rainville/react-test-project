<?php

namespace App\Block;

use DNADesign\Elemental\Models\BaseElement;
use Marcz\SSCounter\SSCounterField;

class CounterBlock extends BaseElement
{

    private static $table_name = 'CounterBlock';

    private static $singular_name = 'Counter Block';

    private static $icon = 'font-icon-block-accordion';

    private static $db = [
        'CounterWarning' => 'Int',
        'CounterDanger' => 'Int',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab(
            'Root.Main',
            [
                SSCounterField::create('CounterWarning', 'Warning', 0)->addExtraClass('sscounter sscounter-warning'),
                SSCounterField::create('CounterDanger', 'Danger', 0)->addExtraClass('sscounter sscounter-danger'),
            ]
        );

        return $fields;
    }

        /**
     * @codeCoverageIgnore
     * @return string
     */
    public function getType(): string
    {
        return static::$singular_name;
    }

}
