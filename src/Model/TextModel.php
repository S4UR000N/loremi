<?php

// src/Model/TextModel.php
namespace App\Model;

class TextModel
{
    private $text_id;
    private $words;

    // TEXT ID
    public function setTextID(int $id)
    {
        $this->text_id = $id;
    }
    public function getTextID()
    {
        return $this->text_id;
    }

    // WORDS
    public function setWords(array $arr)
    {
        $this->text_id = $id;
    }
    public function getWords()
    {
        return $this->text_id;
    }
}
