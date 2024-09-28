<?php

class Route
{
    protected $controller = "home";
    protected $method = "get";
    protected $parameters = array();

    public function __construct()
    {
        $this->ParseURL();
        if (file_exists(CONTROLLER . $this->controller . ".php")) {
            require_once(CONTROLLER . $this->controller . ".php");
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->method)) {
                call_user_func_array([$this->controller, $this->method], $this->parameters);
            } else {
                $this->controller = "home";
                $this->method = "pagenotfound";
                require_once(CONTROLLER . $this->controller . ".php");
                $this->controller = new $this->controller;
                call_user_func_array([$this->controller, $this->method], $this->parameters);
            }
        } else {
            $this->controller = "home";
            $this->method = "pagenotfound";
            require_once(CONTROLLER . $this->controller . ".php");
            $this->controller = new $this->controller;
            call_user_func_array([$this->controller, $this->method], $this->parameters);
        }
    }

    protected function ParseURL()
    {
        $dirname = dirname($_SERVER['SCRIPT_NAME']);
        $basename = basename($_SERVER['SCRIPT_NAME']);
        $request_uri = str_replace([$dirname, $basename], '', $_SERVER['REQUEST_URI']);
        $request = trim($request_uri, "/");
        if (!empty($request)) {
            $url = explode("/", $request);
            $this->controller = isset($url[0]) ? $url[0] : "home";
            $this->method = isset($url[1]) ? $url[1] : "get";
            unset($url[0], $url[1]);
            $this->parameters = !empty($url) ? array_values($url) : array();
        } else {
            $this->controller = "home";
            $this->method = "get";
            $this->parameters = array();
        }
    }
}