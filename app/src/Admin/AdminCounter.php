<?php

namespace App\Admin;

use App\Model\SampleCounter;
use SilverStripe\Admin\ModelAdmin;

class AdminCounter extends ModelAdmin
{

    private static $managed_models = [
        SampleCounter::class,
    ];

    private static $url_segment = 'counters';

    private static $menu_title = 'Counters';

    private static $menu_icon_class = 'font-icon-plus';

}
