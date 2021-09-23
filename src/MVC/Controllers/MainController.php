<?php

namespace MVC\Controllers;

use MVC\Services\DB;
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
        $articles = $this->db->query('SELECT * FROM `articles`;');
        // $articles = [
        //     ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
        //     ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        // ];

        $this->view->render('main/main.php', ['articles' => $articles]);
    }
 
    public function sayHello(string $name)
    {
        $this->view->renderHtml('main/hello.php', ['username' => $name, 'title' => 'Страница приветствия']);
    }
    
    public function sayBye(string $name)
    {
        echo 'Bye, ' . $name . '!';
    }
    
}

?>