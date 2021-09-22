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
    }

    public function styles(string $file)
    {
        $this->style->render($file);
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