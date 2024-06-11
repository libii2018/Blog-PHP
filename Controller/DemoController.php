<?php

namespace App\Controller;

use Core\Database\QueryBuilder;

class DemoController extends AppController {

    public function index() {
        require ROOT . '/Query.php';
        echo \Query::select('id','title','contenu')
            ->from('articles','Post')
            ->where('post.category_id = 1')
            ->where('Post.date > NOW()');
    }

}