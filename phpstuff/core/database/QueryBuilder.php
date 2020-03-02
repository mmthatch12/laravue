<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        //this prepares the database query
        $statement = $this->pdo->prepare("select * from {$table}");

        //this runs the database query
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
}