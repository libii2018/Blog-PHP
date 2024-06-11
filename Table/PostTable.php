<?php

namespace App\Table;

use Core\Table\Table;

class PostTable extends Table {

    protected $table = 'articles';
    
    /**
     * Recupere les derniers article
     * @return array
     */



    public function last() {
        return $this->query("
            SELECT articles.id, articles.title, articles.contenu, categories.title as categorie 
            FROM articles 
            LEFT JOIN categories ON category_id = categories.id
            ORDER BY articles.date DESC");
    }


    /**
     * Recupere les derniers articles de la category demandee
     * @param $category_id int
     * @return array
     */

    public function lastByCategory($category_id) {
        return $this->query("
            SELECT articles.id, articles.title, articles.contenu, categories.title as categorie 
            FROM articles 
            LEFT JOIN categories ON category_id = categories.id
            WHERE articles.category_id = ?
            ORDER BY articles.date DESC", [$category_id]);
    }

    /**
     * Recupere un article en liant la categorie associee
     * @param $id int
     * @return \App\Entity\PostEntity
     */

    public function findWithCategory($id) {
        return $this->query("
            SELECT articles.id, articles.title, articles.contenu, categories.title as categorie 
            FROM articles 
            LEFT JOIN categories ON category_id = categories.id
            WHERE articles.id = ?", [$id], true);
    }

}