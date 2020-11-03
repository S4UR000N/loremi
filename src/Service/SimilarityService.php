<?php

// src/Model/SimilarityService.php
namespace App\Service;

use App\Model\TextModel;
use App\Model\ResultsModel;

class SimilarityService
{
    public ResultsModel $resultsModel;

    // SET / MODIFY METHODS
    public function compareTextModels($allTextsModel)
    {
        $this->resultsModel = new ResultsModel();
        $dexWord1 = $this->mergeDexAndWord($allTextsModel[0]);
        $dexWord2 = $this->mergeDexAndWord($allTextsModel[1]);

        $text1Diff = [];
        $text2Diff = [];
        $crossSection = [];
        foreach($dexWord1 as $dex1 => $word1)
        {
            foreach($dexWord2 as $dex2 => $word2)
            {
                if($dex1 == $dex2)
                {
                    $crossSection[$dex1] = $word1;
                }
            }
        }
        $text1Diff = array_diff_key($dexWord1, $crossSection);
        $text2Diff = array_diff_key($dexWord2, $crossSection);

        return
        [
            "dex12Count" => [count($dexWord1), count($dexWord2)],
            "diffCrossCount" => [count($text1Diff), count($text2Diff), count($crossSection)],
            "diffCross" => [$text1Diff, $text2Diff, $crossSection]
        ];
    }

    // HELPER METHODS
    public function mergeDexAndWord(TextModel $textModel) // dex is key, word is val
    {
        $dexWord = [];
        $wordsDexedUnique = $textModel->getWordsDexedUnique();
        foreach($textModel->getWordsUnique() as $key => $val)
        {
            $dexWord[$wordsDexedUnique[$key]] = $val;
        }
        return $dexWord;
    }
}
