<?php

namespace App\Controller\Admin;
use Core\HTML\BootstrapForm;
use \App;

class PostsController extends AppController {

    public function __construct() {
        parent::__construct();
        $this->loadModel('Post');
    }

    public function index() {
        $posts = $this->Post->all();
        $this->render('admin.posts.index',compact('posts'));
    }

    public function add() {
        if(!empty($_POST)){
            $resultat = $this->Post->create([
                'title' => $_POST['title'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($resultat) {
                return $this->index();
            }   
        }
        $this->loadModel('category');
        $categories = App::getinstance()->getTable('Category')->extract('id','title');
        $form = new BootstrapForm($_POST);
        $this->render('admin.posts.edit',compact('categories','form')); 
    }

    public function edit() {
        if(!empty($_POST)){
            $resultat = $this->Post->update($_GET['id'],[
                'title' => $_POST['title'],
                'contenu' => $_POST['contenu'],
                'category_id' => $_POST['category_id']
            ]);
            if($resultat) {
                return $this->index();
            }
        }
        $post = $this->Post->find($_GET['id']);
        $this->loadModel('Category');
        $categories = $this->Category->extract('id','title');
        $form = new BootstrapForm($post);
        $this->render('admin.posts.edit',compact('categories','form')); 
    }

    public function delete() {
        if(!empty($_POST)){
            $resultat = $this->Post->delete($_POST['id']);
            return $this->index();
        }
    }

}