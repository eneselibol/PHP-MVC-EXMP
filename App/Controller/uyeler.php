<?php
require_once(CORE . 'controller.php');

class Uyeler extends Controller
{
    public function get()
    {
        $usersModel = $this->model('users');
        $users = $usersModel->getAll();
        $this->view('uyeler', $users);
    }
}