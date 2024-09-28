<?php
require 'vendor/autoload.php';

class Controller
{

    public function view($name, $data = [])
    {
        $loader = new \Twig\Loader\FilesystemLoader(['App/View']);
        $twig = new \Twig\Environment($loader);
        echo $twig->render(strtolower($name) . '.html', ['data' => $data]);
    }

    public function model($name)
    {
        require MODEL . strtolower($name) . '.php';
        return new $name;
    }
}