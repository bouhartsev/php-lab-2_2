<?php

namespace MVC\Views;
 
class MainView
{
    private $templatesPath;
 
    public function __construct(string $templatesPath)
    {
        $this->templatesPath = $templatesPath;
    }
 
    public function render(string $templateName, array $vars = [])
    {
        extract($vars);
 
        include $this->templatesPath . '/' . $templateName;
    }
}

?>