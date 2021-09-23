<?php

namespace MVC\Controllers;

use MVC\Views\MainView;

use MVC\Models\Articles\Article;
 
class MainController
{
    private $db;
    private $view;
 
    public function __construct()
    {
        $this->db = new DB();
        $this->view = new MainView(__DIR__ . '/../../templates');
    }
 
    public function main()
    {
        $articles = Article::findAll();
        $this->view->render('main/main.php', ['articles' => $articles]);
    }
}

?>