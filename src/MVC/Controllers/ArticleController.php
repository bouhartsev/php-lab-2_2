<?php
namespace MVC\Controllers;
use MVC\Views\MainView;
use MVC\Models\Articles\Article;
use MVC\Models\Users\User;

class ArticleController{
    private $view;

    public function __construct(){
        $this->view = new MainView (__DIR__.'/../../templates');
    }

    public function view(int $articleId){
        $result = Article::getById($articleId);
        if (!$result) {
            $this->view->render('errors/404.php', [], 404);
            return;
        }
        $this->view->render('articles/view.php', ['article' => $result, 'title' => $result->getName()]);
    }

    public function edit(int $articleId) {
        $result = Article::getById($articleId);
        if ($result === []) {
            $this->view->render('errors/404.php', [], 404);
            return;
        }

        $result->setName('New name');
        $result->setText('New text');
        $result->save();
    }

    public function add() {
        $author = User::getById(1);

        $article = new Article();
        $article->setAuthor($author);
        $article->setName('Заголовок');
        $article->setText('Текст');
        $article->save();
        echo 'THe article "Заголовок" has been added';
    }
}