<?php

// src/Model/TextService.php
namespace App\Service;

use App\Model\TextModel;

class TextService
{
    public $textModel;

    // SET / MODIFY METHODS
    public function populateTextModel($text_id, $words)
    {
        $this->textModel = new TextModel();
        $this->textModel = $this->textModel->setTextID($text_id);
        $this->textModel = $this->textModel->setWords($words);
        $this->textModel = $this->textModel->setWordsDexed($this->applySoundex($this->textModel->getWords()));
        $this->textModel = $this->wordsUnique($this->textModel);
        return $this->textModel;
    }

    // HELPER METHODS
    public function applySoundex($words)
    {
        $wordsDexed = [];
        foreach($words as $word)
        {
            $wordsDexed[] = soundex($word);
        }
        return $wordsDexed;
    }
    private function wordsUnique(TextModel $textModel)
    {
        // Unique words for $wordsDexedUnique
        $wordsDexedUnique = array_unique($textModel->getWordsDexed());

        // Unique words for $wordsUnique
        $wordsUnique = $textModel->getWords();
        foreach($textModel->getWords() as $index => $word)
        {
            if(!array_key_exists($index, $wordsDexedUnique))
            {
                unset($wordsUnique[$index]);
            }
        }

        // convert all keys to numerically enumerated keys starting from 0
        $wordsUnique = array_values($wordsUnique);
        $wordsDexedUnique = array_values($wordsDexedUnique);

        // store data to model
        $textModel = $textModel->setWordsUnique($wordsUnique);
        $textModel = $textModel->setWordsDexedUnique($wordsDexedUnique);

        return $textModel;

    }

}
