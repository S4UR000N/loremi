<?php

// src/Model/AllTextsModel.php
namespace App\Model;

class AllTextsModel
{
    private array $texts;

    // TEXTS
    public function addTextsModel(App\Model\TextsModel $obj)
    {
        $this->texts[] = $obj;
    }
    public function getTextsModel(int $index)
    {
        return $this->texts[$index];
    }
}
