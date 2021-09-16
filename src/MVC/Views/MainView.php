<?php

namespace MVC\Views;
 
class MainView
{
    private $templatesPath;
 
    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }
 
    public function render(string $templateName, array $vars = [], string $type = "html")
    {
        extract($vars);
 
        include $this->templatesPath . '/' . $templateName;
        if ($type=='css') header('Content-Type: text/css');
    }
}

?>