<?php

use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Twiggy\ShowTestPage;

require_once __DIR__ . '/vendor/autoload.php';

class twiggy extends rcube_plugin
{

    /**
     * @var Environment
     */
    private $twig;

    /**
     * @var ShowTestPage
     */
    private $showTestPage;

    /**
     * @var rcube_db_mysql
     */
    private $database;

    /**
     * @var rcmail
     */
    private $framework;

    public function init()
    {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $this->bootstrap();
        $this->showTestPage->index();
        die();
    }

    private function bootstrap()
    {
        $this->framework = rcube::get_instance();
        $this->database = $this->framework->db;
        $this->initTwig();
        $this->showTestPage = new ShowTestPage($this);
    }

    private function initTwig()
    {
        $templateDirectory = $this->pluginDirectory() . 'skins/default/templates/';
        $cacheDirectory = $this->pluginDirectory() . 'var/cache/';
        $loader = new FilesystemLoader($templateDirectory);
        $this->twig = new Environment($loader, [
            'cache' => $cacheDirectory,
        ]);
    }

    public function twig(): Environment
    {
        return $this->twig;
    }

    public function pluginDirectory(): string
    {
        return strtolower($this->home) . '/';
    }

    public function showTestPage(): ShowTestPage
    {
        return $this->showTestPage;
    }
}
