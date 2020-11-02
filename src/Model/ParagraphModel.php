<?php

// src/Model/ParagraphModel.php
namespace App\Model;

class ParagraphModel
{
    public array $words;

    // SET METHODS
    public function setWords(array $arr)
    {
        $this->words = $arr;
        return $this;
    }

    // GET METHODS
    public function getWords()
    {
        return $this->words;
    }
}
