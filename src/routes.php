<?php
 
return [
    '~^articles/(\d+)$~' => [\MVC\Controllers\ArticleController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\MVC\Controllers\ArticleController::class, 'edit'],
    '~^articles/add$~' => [\MVC\Controllers\ArticleController::class, 'add'],
    '~^$~' => [\MVC\Controllers\MainController::class, 'main'],
];

?>