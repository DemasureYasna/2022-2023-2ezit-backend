<?php

class Schoen
{
    //attributen (1)
    public $id;
    public $benaming;
    public $merk;
    public $afbeelding;
    public $uitverkocht;
    public $prijs;
    public $typeId;

    //constructor (3)
    public function __construct($parId = -1, $parBenaming = "", $parMerk = "", $parAfbeelding = "", $parPrijs = 0, $parUitverkocht = false, $parTypeid = -1)
    {
        $this->id = $parId;
        $this->benaming = $parBenaming;
        $this->merk = $parMerk;
        $this->afbeelding = $parAfbeelding;
        $this->uitverkocht = $parUitverkocht;
        $this->prijs = $parPrijs;
        $this->typeId = $parTypeid;
    }
}
