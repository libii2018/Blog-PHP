<?php

namespace App\Controller\Admin;
use \App;
use \Core\Auth\DBauth;


class AppController extends \App\Controller\AppController {

    public function __construct() {
        parent::__construct();
        $app = App::getInstance();
        // Auth
        $auth = new DBAuth($app->getDb());
        if(!$auth->logged()) {
            $this->forbidden();
        }
    }

}