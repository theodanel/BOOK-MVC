<?php

namespace M2i\Mvc\Model;

use M2i\Mvc\Database;

class Model
{
    public static function all()
    {
        $class = static::class; // Nom de la classe: Mvc\Model\User
        $class = strrchr($class, '\\'); // \User
        $table = strtolower(substr($class, 1)).'s'; // users

        $sql = 'SELECT * FROM '.$table;
        $query = Database::get()->query($sql);

        return $query->fetchAll();
    }
}
