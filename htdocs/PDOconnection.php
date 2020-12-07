<?php

class Connexion
{
    public static function db($dbName)
    {
        $pdo = new PDO('mysql:host=mysqldb;dbname=' . $dbName . '', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;
    }

    public function countTable($pdo, $column, $table)
    {
        $sql = $pdo->prepare("SELECT COUNT($column) as count FROM $table");
        $sql->execute();
        while ($rows = $sql->fetch()) {
            echo $rows['count'];
        }
    }
}
