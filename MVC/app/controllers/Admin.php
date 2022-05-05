<?php
class Admin extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('adminModel');
        $this->postModel = $this->model('postsModel');
        $this->logModel = $this->model('telemetryActionModel');
    }

    public function index()
    {
        $this->view('Admin/login');
    }
    public function forgot(){
        $this->view('Admin/forgot');
    }
    public function tables(){
        $data = [
            'adminModel' => $this->adminModel,
            'admins' => $this->adminModel->getAdmins(),
            'posts' => $this->postModel->getPosts(),
            'actions' => $this->logModel->getActions(),
        ];
        $this->view('Admin/tables', $data);
    }
}