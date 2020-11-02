<?php

// src/Model/TextsService.php
namespace App\Service;

use App\Model\AllTextsModel;
use App\Model\TextsModel;

use App\Service\TextsService;

class AllTextsService
{
    public array $inputData;
    public App\Model\AllTextsModel $allTextsModel;

    // SET / MODIFY METHODS
    public function setInputData($inputData)
    {
        $this->inputData = $inputData;
        return $this;
    }
    public function populateAllTextsModel(array $texts)
    {
        foreach($texts as $text_id => $text)
        {
            $textsService = new TextsService();
            $textsService = $textsService->setInputData($this->inputData);
            $textsService = $textsService->populateTextsModel();
        }
        return $this;
    }

    // GET METHODS

    // HELPER METHODS

}
