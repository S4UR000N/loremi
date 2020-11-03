<?php

// src/Model/TextModel.php
namespace App\Model;

class TextModel
{
    public int $text_id;
    public array $words;
    public array $wordsUnique;
    public array $wordsDexed;
    public array $wordsDexedUnique;

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

    // WORDS
    public function setWords(array $arr)
    {
        $this->words = $arr;
        return $this;
    }
    public function getWords()
    {
        return $this->words;
    }
    public function setWordsUnique(array $arr)
    {
        $this->wordsUnique = $arr;
        return $this;
    }
    public function getWordsUnique()
    {
        return $this->wordsUnique;
    }

    // WORDS DEXED
    public function setWordsDexed(array $arr)
    {
        $this->wordsDexed = $arr;
        return $this;
    }
    public function getWordsDexed()
    {
        return $this->wordsDexed;
    }
    public function setWordsDexedUnique(array $arr)
    {
        $this->wordsDexedUnique = $arr;
        return $this;
    }
    public function getWordsDexedUnique()
    {
        return $this->wordsDexedUnique;
    }
}
