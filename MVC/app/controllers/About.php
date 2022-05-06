<?php
class About extends Controller
{
    public function __construct()
    {
        
        $this->postModel = $this->model('postsModel');
    }

    public function index()
    {
        $this->view('About/aboutus');
    }
    public function pastworks(){
        $data = $this->postModel->getPosts();
        $this->view('About/pastworks',$data);
    }
}