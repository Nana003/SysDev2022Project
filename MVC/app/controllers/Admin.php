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
        if(!isset($_POST['login'])){
            $this->view('Admin/login');
        }
        else{
            $admin = $this->adminModel->getAdmin($_POST['username']);
            
            if($admin != null){
                $hashed_pass = $admin->admin_pass_hash;
                $password = $_POST['password'];
                if(password_verify($password,$hashed_pass)){
                    $data = [
                        'msg' => "Welcome, $admin->admin_name!",
                    ];
                    $this->view('Admin/tables',$data);
                }
                else{
                    $data = [
                        'msg' => "Password incorrect! for $admin->admin_name",
                    ];
                    $this->view('Admin/login',$data);
                }
            }
            else{
                $data = [
                    'msg' => "Admin: ". $_POST['username'] ." does not exists",
                ];
                $this->view('Admin/login',$data);
            }
        }
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
        if(!isset($_POST['addAdmin'])){
            $this->view('Admin/addAdministrator');
        }
        else{
            $admin = $this->adminModel->getAdminByUsername($_POST['name']);
            if($admin == null){
                $data = [
                    'admin_name' => trim($_POST['name']),
                    'admin_pass_hash' => password_hash($_POST['passwd'], PASSWORD_DEFAULT),
                    'admin_mail' => trim($_POST['adminEmail'])
                ];
                if($this->adminModel->createAdmin($data)){
                        echo 'Please wait creating the account for '.trim($_POST['name']);
                        echo '<meta http-equiv="Refresh" content="2; url=/MVC/Login/">';
                }
            }
            else{
                $data = [
                    'msg' => "Admin: ". $_POST['name'] ." already exists",
                ];
                $this->view('Admin/addAdministrator',$data);
            }  
        }
    } 
}