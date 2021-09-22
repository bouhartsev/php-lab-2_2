<?php
 
namespace MVC\Services;
 
class DB
{
    private $pdo;
 
    public function __construct()
    {
        $dbOptions = (require __DIR__ . '/../../settings.php')['db'];
 
        $this->pdo = new \PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password']
        );
        $this->pdo->exec('SET NAMES UTF8');
    }
 
    public function query(string $sql, $params = []): ?array
    {
        $sth = $this->pdo->prepare($sql);
        $result = $sth->execute($params);
 
        if (false === $result) {
            return null;
        }
 
        return $sth->fetchAll();
    }
}


<?php
 
namespace MyProject\Controllers;
 
use MVC\Services\DB;
use MVC\View\View;
 
class MainController
{
    private $view;
    private $db;
 
    public function __construct()
    {
        $this->view = new View(__DIR__ . '/../../../templates');
        $this->db = new DB();
    }
 
    public function main()
    {
        $articles = $this->db->query('SELECT * FROM `articles`;');
        var_dump($articles);
        //$this->view->renderHtml('main/main.php', ['articles' => $articles]);
    }
}
