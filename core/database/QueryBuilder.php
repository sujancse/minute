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

    /**
     * Insert data to database.
     *
     * @param  string table
     * @param  array of inputs
     */
    public function insert($table, $parameters)
    {
        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            $this->paramsToPlaceholder($parameters)
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    /**
     * Parameters to placeholder.
     *
     * @param  array
     *
     * @return string
     */
    public function paramsToPlaceholder($parameters)
    {
        $params = array_map(function ($param) {
            return ":{$param}";
        }, array_keys($parameters));

        return implode(', ', $params);
    }
}
