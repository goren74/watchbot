<?php


namespace App\Controller;

use Core\Controller\Controller;
use \App;
use Core\HTML\BootstrapForm;

class PostController extends AppController{
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
        $this->render('post.index', compact('posts', 'categories'));
    }

    public function view(){
        $post = $this->post->findWithCategory($_GET['id']);
        $this->render('post.view', compact('post'));
    }

    public function category(){
        $category = $this->category->find($_GET['id']);
        if($category === false){
            $this->notFound();
        }
        $post = $this->post->lastByCategory($_GET['id']);
        $categories = $this->category->all();
        $this->render('post.category',compact('$post', '$categories', '$category'));

    }
    
}