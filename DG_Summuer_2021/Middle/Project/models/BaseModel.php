<?php

require_once 'library/DB.php';

/**
 * @var $pdo PDO
 */
class BaseModel
{
    private $db;
    protected $pdo;
    protected $statement;

    protected function execute($sql, $params = [])
    {
        $this->statement = $this->pdo->prepare($sql);
        return $this->statement->execute($params);
    }

    public function __construct()
    {
        $this->db = new DB();
        $this->pdo = $this->db->getPdo();
    }
}