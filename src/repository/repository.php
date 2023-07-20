<?php
require_once dirname(__FILE__) . "/../model/schoenen.php";
require_once dirname(__FILE__) . "/../model/schoenentypes.php";
require_once dirname(__FILE__) . "/../database/database.php";

class Schoenenrepository
{
    public static function getAllSchoenen()
    {
        $arr = Database::getRows("SELECT id, benaming, merk, afbeelding, uitverkocht, prijs, typeId FROM `schoenen`", NULL, "Schoen");
        return $arr;
    }

    public static function getSchoenenById($parID)
    {
        $arr = Database::getSingleRow("SELECT id, benaming, merk, afbeelding, uitverkocht, prijs, typeId FROM `schoenen` WHERE id = ?", [$parID], "Schoen");
        return $arr;
    }

    public static function getAllSchoenentypes()
    {
        $arr = Database::getRows("SELECT typeId, typeNaam FROM `schoentypes`", NULL, "Schoenentype");
        return $arr;
    }

    public static function updateSchoen($parID, $parBenaming, $parMerk, $parAfbeelding, $parUitverkocht, $parPrijs, $parTypeID)
    {
        $int = Database::execute("UPDATE `schoenen` SET benaming = ?, merk = ?, afbeelding = ?, uitverkocht = ?, prijs = ?, typeId = ? WHERE id = ?", [$parBenaming, $parMerk, $parAfbeelding, $parUitverkocht, $parPrijs, $parTypeID, $parID]);
        return $int;
    }

    public static function createSchoen($parID, $parBenaming, $parMerk, $parAfbeelding, $parUitverkocht, $parPrijs, $parTypeID)
    {
        $int = Database::execute("INSERT INTO `schoenen` (id, benaming, merk, afbeelding, uitverkocht, prijs, typeId) VALUES (?, ?, ?, ?, ?, ?, ?, ?)", [$parID, $parBenaming, $parMerk, $parAfbeelding, $parUitverkocht, $parPrijs, $parTypeID]);
        return $int;
    }

    public static function deleteSchoen($parID)
    {
        $int = Database::execute("DELETE FROM `schoenen` WHERE id = ?", [$parID]);
        return $int;
    }
};
