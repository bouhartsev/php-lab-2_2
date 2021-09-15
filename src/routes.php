<?php
 
return [
    '~^hello/(.*)$~' => [\MVC\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\MVC\Controllers\MainController::class, 'sayBye'],
    '~^$~' => [\MVC\Controllers\MainController::class, 'main'],
];

?>