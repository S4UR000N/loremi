<?php

// src/Model/PopulateParagraphModelService.php
namespace App\Service;

use App\Model\ParagraphModel;

class PopulateParagraphModelService
{
    public $paragraphModel;
    public function populateParagraphModel($text_id, $paragraph, $words)
    {
        $this->paragraphModel = new ParagraphModel();
        $this->paragraphModel = $this->paragraphModel->setTextID($text_id);
        $this->paragraphModel = $this->paragraphModel->setParagraph($paragraph);
        $this->paragraphModel = $this->paragraphModel->setWords($this->explode($words));
        return $this;
    }
    public function explode($words)
    {
        return explode(" ", $words);
    }
    public function getParagraphModel()
    {
        return $this->paragraphModel;
    }
}
