<?php
declare(strict_types=1);

namespace core;

use app\Config;

class Database
{
    private static ?self $_instance = null;
    private \PDO $_pdo;

    private function __construct()
    {
        $dsn = 'mysql:host=' . Config::SQL_HOST .
               ';dbname=' . Config::SQL_DATABASE .
               ';charset=utf8mb4';

        try {
            $this->_pdo = new \PDO(
                $dsn,
                Config::SQL_USER,
                Config::SQL_PASSWORD,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ,
                    \PDO::ATTR_EMULATE_PREPARES => false,
                ]
            );
        } catch (\PDOException $e) {
            die("BDD ERROR: " . $e->getMessage());
        }
    }

    public static function getInstance(): self
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    public function getPdo(): \PDO
    {
        return $this->_pdo;
    }

    private function __clone() {}
}