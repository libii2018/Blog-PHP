<?php

namespace App\Controller;


class UsersController extends AppController {
    
    public function login() {
        $errors = false; 
        if(!empty($_POST)) {
            $auth = new \Core\Auth\DBAuth(App::getInstance()->getDb());
            if($auth->login($_POST['username'],$_POST['password'])) {
                header('Location: index.php?p=admin.posts.index');
            } else {
                $errors = true;
            }
        }
        $form = new BootstrapForm($_POST);  
        $this->render('users.login',compact('form','errors')); 
    } 


}