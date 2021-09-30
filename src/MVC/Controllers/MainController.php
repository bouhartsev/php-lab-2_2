<?php

namespace MVC\Controllers;

use MVC\Views\MainView;

use MVC\Models\Articles\Article;
 
class MainController
{
    private $view;
 
    public function __construct()
    {
        $this->view = new MainView(__DIR__ . '/../../templates');
    }
 
    public function main()
    {
        $articles = Article::findAll();
        $this->view->render('main/main.php', ['articles' => $articles]);
    }
}

?>