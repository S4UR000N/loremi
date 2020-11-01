<?php

// src/Model/AllTextsModel.php
namespace App\Model;

class AllTextsModel
{
    private array $allTexts;

    // TEXTS
    public function addTextsModel(App\Model\TextsModel $obj)
    {
        $this->allTexts[] = $obj;
    }
    public function getTextsModel(int $index)
    {
        return $this->allTexts[$index];
    }
}
