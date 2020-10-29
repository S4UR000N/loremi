<?php

// src/Model/ParagraphModel.php
namespace App\Model;

class ParagraphModel
{
    public $text_id = 0;
    public $paragraph = 0;
    public $words = [];

    // TEXT ID
    public function setTextID(int $id)
    {
        $this->text_id = $id;
        return $this;
    }
    public function getTextID()
    {
        return $this->text_id;
    }

    // PARAGRAPH
    public function setParagraph(int $num)
    {
        $this->paragraph = $num;
        return $this;
    }
    public function getParagraph()
    {
        return $this->paragraph;
    }

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
