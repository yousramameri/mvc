<?php
declare(strict_types=1);
namespace app;
use core\Database;

class NewsModel
{
    private \PDO $_pdo;

    public function __construct()
    {
        $this->_pdo = Database::getInstance()->getPdo();
    }

    public function getAllNewsFromDb(): array
    {
        try {
            $stmt = $this->_pdo->query("SELECT * FROM mvc_news");
            return $stmt->fetchAll();
        } catch (\PDOException $e) {
            die("SQL ERROR: " . $e->getMessage());
        }
    }
}