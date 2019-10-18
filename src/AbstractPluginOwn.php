<?php

namespace Twiggy;

use twiggy;

abstract class AbstractPluginOwn
{

    /**
     * @var twiggy
     */
    protected $plugin;

    public function __construct(twiggy $plugin)
    {
        $this->plugin = $plugin;
    }
}
