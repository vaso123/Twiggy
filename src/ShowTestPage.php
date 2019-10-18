<?php

namespace Twiggy;

use Exception;

class ShowTestPage extends AbstractPluginOwn
{
    public function index()
    {
        try {
            $template = $this->plugin->twig()->load('test.html.twig');
            echo $template->render(['foo' => 'bar']);
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
}
