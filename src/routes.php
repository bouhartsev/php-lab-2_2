<?php
 
return [
    '~^hello/(.*)$~' => [\MVC\Controllers\MainController::class, 'sayHello'],
    '~^bye/(.*)$~' => [\MVC\Controllers\MainController::class, 'sayBye'],
    '~^styles/(.*)$~' => [\MVC\Controllers\MainController::class, 'styles'],
    '~^$~' => [\MVC\Controllers\MainController::class, 'main'],
];

?>