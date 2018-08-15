<?php

/**
 * Database query builder.
 */
class QueryBuilder
{
    private $pdo;

    /**
     * Get the PDO object.
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Get all data from table.
     *
     * @return obj
     */
    public function getAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
}
