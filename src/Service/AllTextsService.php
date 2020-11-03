<?php

// src/Model/TextsService.php
namespace App\Service;

use App\Model\AllTextsModel;
use App\Service\TextsService;

class AllTextsService
{
    public $allTextsModel;

    // SET / MODIFY METHODS
    public function populateAllTextsModel(array $texts)
    {
        $arr = [];
        $this->allTextsModel = new AllTextsModel();
        foreach($texts as $text_id => $text)
        {
            $words = $this->textToArray($text);
            $textService = new TextService();
            $textModel = $textService->populateTextModel($text_id, $words); // this creates and populates App\Model\TextModel
            $this->allTextsModel = $this->allTextsModel->addTextModel($textModel);
        }
        return $this->allTextsModel->getTextModel(0);
    }

    // GET METHODS

    // HELPER METHODS
    private function textToArray(string $text)
    {
        $strings = str_replace(';', " ", $text);
        $strings = explode(" ", $strings);
        $words = [];
        foreach($strings as $string)
        {
            $word = trim(chop($string, "\.\,\:\;\!\?"));
            if($word != "")
            {
                $words[] = $word;
            }
        }
        return $words;
    }

}
