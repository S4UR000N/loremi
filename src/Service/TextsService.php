<?php

// src/Model/TextsService.php
namespace App\Service;

use App\Model\TextsModel;

class TextsService
{
    public array $inputData;
    public int $text_id;
    private array $paragraphs;

    // SET / MODIFY METHODS
    public function setInputData($inputData)
    {
        $this->inputData = $inputData;
        return $this;
    }
    public function populateTextsModel()
    {
        foreach($this->inputData as $words)
        {
            $paragraphService = new ParagraphService();
            $paragraphService = $paragraphService->populateParagraphModel($words)->getParagraphModel();
        }
        return $this;
    }

    // GET METHODS

    // HELPER METHODS

}
