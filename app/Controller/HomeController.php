<?php

namespace App\Controller;

class HomeController extends AppController{

    protected $layout = 'default';

    public function __construct()
    {
        parent::__construct();
        $this->loadModel('post');
        $this->loadModel('category');
    }

    public function index(){
        $posts = $this->post->last();
        $categories = $this->category->all();
        $this->render('index', compact('posts', 'categories'));
    }
}