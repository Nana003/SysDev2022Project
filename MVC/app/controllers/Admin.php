<?php
class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('Admin/login');
    }
    public function forgot(){
        $this->view('Admin/forgot');
    }
    public function tables(){
        $this->view('Admin/tables');
    }
}