<?php

class Connection
{

    public static function make($config) 
    {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options'],
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}

// way to make a method accessable globally without requiring an instance
//instead of:
// $connection = new Connection();
// $connection->make();
// you can do this:
// Connection::make();