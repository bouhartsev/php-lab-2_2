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
 
        $file = $this->templatesPath . '/' . $templateName;
        include $this->templatesPath . '/' . $templateName;

        $type = mime_content_type($file);
        if ($type) header('Content-Type: '.$type); // рендер статики, вроде стилей и т.п.
    }
}

?>