<?php

// src/Model/PopulateParagraphModelService.php
namespace App\Service;

use App\Model\ParagraphModel;

class PopulateParagraphModelService
{
    public function populateParagraphModel($text_id, $paragraph, $words)
    {
        $paragraphModel = new ParagraphModel();
        $paragraphModel->setTextID($text_id);
        $paragraphModel->setParagraph($paragraph);
        $paragraphModel->setWords($this->explode($words));
    }
    public function explode($words)
    {
        return explode(" ", $words);
    }
}
