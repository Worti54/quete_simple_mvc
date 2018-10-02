<?php
/**
 * Created by PhpStorm.
 * User: worti
 * Date: 02/10/18
 * Time: 17:40
 */
namespace Model;

// src/Model/CategoryManager.php
require __DIR__ . '/../../app/db.php';

class CategoryManager
{

    // récupération de toutes les categories
    public function selectAllCategories(): array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category";
        $res = $pdo->query($query);
        return $res->fetchAll();
    }
    // la méthode prend l'id en paramètre
    public function selectOneCategory(int $id) : array
    {
        $pdo = new \PDO(DSN, USER, PASS);
        $query = "SELECT * FROM category WHERE id = :id";
        $statement = $pdo->prepare($query);
        $statement->bindValue(':id', $id, \PDO::PARAM_INT);
        $statement->execute();
        // contrairement à fetchAll(), fetch() ne renvoie qu'un seul résultat
        return $statement->fetch();
    }


}

