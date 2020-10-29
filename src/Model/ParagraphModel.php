<?php

// src/Model/ParagraphModel.php
namespace App\Model;

class ParagraphModel
{
    private $text_id;
    private $paragraph;
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

    // PARAGRAPH
    public function setParagraph(string $str)
    {
        $this->paragraph = $str;
    }
    public function getParagraph()
    {
        return $this->paragraph;
    }

    // WORDS
    public function setWords(array $arr)
    {
        $this->words = $arr;
    }
    public function getWords()
    {
        return $this->words;
    }
}
