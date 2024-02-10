<?php

namespace App\Model;

use PDO;

class CupcakeManager extends AbstractManager
{
    public const TABLE = 'cupcake';
    public const CLASSNAME = "App\Model\CupcakeModel";

    public function createCupcake(array $form)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . "
        (`name`, `color1`, `color2`, `color3`, `accessory_id` `created_at`)
        VALUES
        (:name, :color1, :color2, :color3, Now())");
        $statement->bindValue(':name', $form['name'], PDO::PARAM_STR);
        $statement->bindValue(':color1', $form['color1'], PDO::PARAM_STR);
        $statement->bindValue(':color2', $form['color2'], PDO::PARAM_STR);
        $statement->bindValue(':color3', $form['color3'], PDO::PARAM_STR);
        $statement->bindValue(':accessory_id', $form['accessory_id']);
        $statement->execute();
    }

    public function getAllCupcakes()
    {
        $statement = $this->pdo->query('SELECT * FROM' . static::TABLE);
        return $statement->fetchAll(PDO::FETCH_CLASS, static::CLASSNAME);
    }
}
