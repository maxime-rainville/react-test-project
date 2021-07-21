<?php

namespace App\Model;

use Marcz\SSCounter\SSCounterField;
use SilverStripe\ORM\DataObject;

class SampleCounter extends DataObject
{

    private static $table_name = 'SampleCounter';

    private static $db = [
        'Name'           => 'Varchar',
        'InfoCounter'    => 'Int',
        'SuccessCounter' => 'Int',
        'WarningCounter' => 'Int',
        'DangerCounter'  => 'Int',
        'HappyCounter'   => 'Int',
        'SadCounter'     => 'Int',
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            SSCounterField::create('InfoCounter', 'Info Count', 0)->addExtraClass('sscounter sscounter-info'),
            SSCounterField::create('SuccessCounter', 'Success Count', 1)->addExtraClass('sscounter sscounter-success'),
            SSCounterField::create('WarningCounter', 'Warning Count', 2)->addExtraClass('sscounter sscounter-warning'),
            SSCounterField::create('DangerCounter', 'Danger Count', 3)->addExtraClass('sscounter sscounter-danger')
        ]);

        $fields->addFieldsToTab('Root.HappySad', [
            SSCounterField::create('HappyCounter', 'Happy Count', 4)->addExtraClass('sscounter sscounter-happy'),
            SSCounterField::create('SadCounter', 'Sad Count', 5)->addExtraClass('sscounter sscounter-sad')
        ]);

        return $fields;
    }

}
