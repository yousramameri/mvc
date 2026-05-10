<?php
declare(strict_types=1);
namespace core;

use app\Config;

class Dispatcher
{
    private string $_controllerName;
    private string $_action;
    private ?string $_param;

    public function __construct()
    {
        $uri = trim($_GET['uri'] ?? '', '/');

        if (!empty($uri) && !preg_match('#^[a-zA-Z0-9_/]+$#', $uri)) {
            Error::trigger404();
        }

        $segments = array_values(array_filter(explode('/', $uri)));

        $this->_controllerName = $segments[0] ?? Config::DEFAULT_CONTROLLER;
        $this->_action         = $segments[1] ?? Config::DEFAULT_ACTION;
        $this->_param          = $segments[2] ?? null;
    }

    public function run(): void
    {
        $this->loadController($this->_controllerName, $this->_action, $this->_param);
    }

    private function loadController(string $name, string $action, ?string $param): void
    {
        $controllerClass = ucfirst($name).'Controller';
        $controllerPath  = ROOT.SEP.'app'.SEP.'controllers'.SEP.$controllerClass.'.php';

        if (!file_exists($controllerPath)) Error::trigger404();

        require $controllerPath;

        $qualifiedName = '\app\\'.$controllerClass;
        $c = new $qualifiedName();

        if (!method_exists($c, $action)) Error::trigger404();

        $param !== null ? $c->$action($param) : $c->$action();
    }
}