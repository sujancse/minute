<?php

function dd($data)
{
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}

function getAll($pdo)
{
    $statement = $pdo->prepare('select * from todos');
    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_OBJ);
}

function connectToDb()
{
    try {
        return new PDO('mysql:host=127.0.0.1;dbname=todos;', 'root', '');
    } catch (Exception $e) {
        dd($e->getMessage(), $e->getLine(), $e->getFile());
    }
}
