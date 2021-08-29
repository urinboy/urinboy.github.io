<?php

class DB
{
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = 'root';
    const DBNAME = 'blog';

    /**
     * @return PDO
     */
    public function getPdo()
    {
        $dsn = 'mysql:host=' . self::HOST . ';dbname=' . self::DBNAME;

        return new PDO($dsn, self::USERNAME, self::PASSWORD);
    }
}