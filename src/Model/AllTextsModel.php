<?php

// src/Model/AllTextsModel.php
namespace App\Model;

class AllTextsModel
{
    private array $allTexts;

    // SET / MODIFY METHODS
    public function addTextModel(TextModel $obj)
    {
        $this->allTexts[] = $obj;
        return $this;
    }

    // GET METHODS
    public function getTextModel(int $index)
    {
        return $this->allTexts[$index];
    }
}
