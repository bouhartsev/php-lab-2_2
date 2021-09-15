<?php

namespace MVC\Controllers;
 
class MainController
{
    public function main()
    {
        echo 'It is the main page';
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