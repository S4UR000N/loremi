<?php

// src/Model/ParagraphModel.php
namespace App\Model;

class ParagraphModel
{
    public array $words;

    // WORDS
    public function setWords(array $arr)
    {
        $this->words = $arr;
        return $this;
    }
    public function getWords()
    {
        return $this->words;
    }
}
