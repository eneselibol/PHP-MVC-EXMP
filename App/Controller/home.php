<?php
require_once(CORE . 'controller.php');

class Home extends Controller
{
    public function get()
    {
        $this->view('index');
    }
    public function pagenotfound()
    {
        $this->view('pagenotfound');
    }
}