<?php

require_once 'env.php';

class DB
{
    function getConnection()
    {
        $connect = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME . ';charset=' . DBCHARSET;
        $user = DBUSER;
        $password = DBPASS;
        try {
            $dbh = new PDO($connect, $user, $password);
            return $dbh;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    function getData($query, $getAll = true)
    {
        $connect = $this->getConnection();
        $stmt = $connect->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
