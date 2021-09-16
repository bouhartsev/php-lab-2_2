<?php

namespace MVC\Controllers;
 
use MVC\Views\MainView;
 
class MainController
{
    private $view;
 
    public function __construct()
    {
        $this->view = new MainView(__DIR__ . '/../../templates');
    }
 
    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        $this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
 
    public function sayHello(string $name)
    {
        echo 'Hello, ' . $name . '!';
    }
    
    public function sayBye(string $name)
    {
        echo 'Bye, ' . $name . '!';
    }
    
}

?>