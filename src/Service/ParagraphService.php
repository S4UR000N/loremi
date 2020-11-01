<?php

// src/Model/ParagraphService.php
namespace App\Service;

use App\Model\ParagraphModel;

class ParagraphService
{
    public $paragraphModel;

    // SET / MODIFY METHODS
    public function populateParagraphModel(string $words)
    {
        $this->paragraphModel = new ParagraphModel();
        $this->paragraphModel = $this->paragraphModel->setWords($this->explode($words));
        return $this;
    }

    // GET METHODS
    public function getParagraphModel()
    {
        return $this->paragraphModel;
    }

    // HELPER METHODS
    public function explode($words)
    {
        return explode(" ", $words);
    }
}
