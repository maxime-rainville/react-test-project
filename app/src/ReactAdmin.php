<?php

use SilverStripe\Admin\LeftAndMain;

class ReactAdmin extends LeftAndMain
{
    private static $url_segment = 'react';

    public function Widget() {
        return ReactWidget::create();
    }
}
