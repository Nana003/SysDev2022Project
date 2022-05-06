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
            'actions' => $this->logModel->getActions()
        ];
        $this->view('Admin/tables', $data);
    }



    public function addPost() {
        if(!isset($_GET['addPost'])) {
            $this->view('Admin/addPost');
        }else{
            $data = [
                'description' => trim($_POST(['description'])),
                'post_title' => trim($_POST(['title'])),
                'post_media_source' => trim($_POST(['mediaSource'])),
                'admin_id' => $_SESSION['admin_id']
            ];
            if ($this->postModel->createPost($data)) {
                
            }
        }
    }

    public function addAdministrator() {
        if(!isset($_GET['addAdministrator'])) {
            $this->view('Admin/addAdministrator');
        }else{
            if ($_POST(['passwd']) == $_POST(['retypePasswd'])){
                $data = [
                    'admin_name' => trim($_POST(['name'])),
                    'admin_pass_hash' => pass_hash($_POST(['passwd'])),
                    'admin_mail' => trim($_POST(['admin_mail']))
                ];
            
                if ($this->adminModel->createAdmin($data)) {
                    
                }
            }
        }
    }
}