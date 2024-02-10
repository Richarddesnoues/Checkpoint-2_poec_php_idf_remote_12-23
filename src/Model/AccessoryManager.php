<?php

namespace App\Model;

use PDO;

class AccessoryManager extends AbstractManager
{
    public const TABLE = 'accessory';
    public const CLASSNAME = "App\Model\AccessoryModel";

    public function createAccessory(array $form)
    {
        $statement = $this->pdo->prepare("INSERT INTO " . self::TABLE . "(`name`, `url`) VALUES (:name, :url)");

        $statement->bindValue(':name', $form['name'], PDO::PARAM_STR);
        $statement->bindValue(':url', $form['url'], PDO::PARAM_STR);
        $statement->execute();
    }

    public function getAllAccessories()
    {
        $statement = $this->pdo->query('SELECT * FROM' . static::TABLE);
        return $statement->fetchAll(PDO::FETCH_CLASS, static::CLASSNAME);
    }
}
