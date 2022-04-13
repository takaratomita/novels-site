<?php
class Database
{
    private static $pdo;

    public static function getPdo(){
        try {
            if(!isset(self::$pdo)) {
                self::$pdo = new PDO(
                        DB_HOST . DB_NAME. DB_CHARSET,
                        DB_USER,
                        DB_PASS,
                    [
                      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                      PDO::ATTR_EMULATE_PREPARES   => false,
                    ]
                  );
            }
            return self::$pdo;
        } catch (PDOException $e) {
            echo $e->getMessage() . PHP_EOL;
            exit;
        }
    }
}

$pdo = Database::getPdo();
