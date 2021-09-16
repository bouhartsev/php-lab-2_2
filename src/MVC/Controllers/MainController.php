<?php

namespace MVC\Controllers;
 
use MVC\Views\MainView;
 
class MainController
{
    private $template;
    private $style;
 
    public function __construct()
    {
        $this->template = new MainView(__DIR__ . '/../../templates');
        $this->style = new MainView(__DIR__ . '/../../styles');
    }
 
    public function main()
    {
        $articles = [
            ['name' => 'Статья 1', 'text' => 'Текст статьи 1'],
            ['name' => 'Статья 2', 'text' => 'Текст статьи 2'],
        ];
        $this->template->render('main/main.php', ['articles' => $articles]);
        $this->style->render('main.css', ['articles' => $articles]);
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