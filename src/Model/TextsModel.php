<?php

// src/Model/TextsModel.php
namespace App\Model;

class TextsModel
{
    private int $text_id;
    private array $paragraphs;

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

    // PARAGRAPHS
    public function addParagraph(App\Model\ParagraphModel $obj)
    {
        $this->paragraphs[] = $obj;
        return $this;
    }
    public function getParagraph(int $index)
    {
        return $this->$paragraphs[$index];
    }
    public function getAllParagraphs()
    {
        return $this->paragraphs;
    }

}
