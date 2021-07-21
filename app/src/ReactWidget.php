<?php

use MaximeRainville\SilverstripeReact\BootstrapComponent;
use SilverStripe\View\ViewableData;

class ReactWidget extends ViewableData
{
    use BootstrapComponent;

    public function getProps(): array
    {
        return [];
    }

    public function getComponent(): string
    {
        return 'Widget';
    }


}
