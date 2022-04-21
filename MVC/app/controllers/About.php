<?php
class About extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view('About/aboutus');
    }
    public function pastworks(){
        $this->view('About/pastworks');
    }
}