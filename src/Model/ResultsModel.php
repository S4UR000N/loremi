<?php

// src/Model/ResultsModel.php
namespace App\Model;

class ResultsModel
{
    public array $text1Diff;
    public array $text2Diff;
    public $crossSection;

    // SET / MODIFY METHODS
    public function setText1Diff(array $arr)
    {
        $this->text1Diff = $arr;
        return $this;
    }
    public function setText2Diff(array $arr)
    {
        $this->text2Diff = $arr;
        return $this;
    }
    public function setCrossSection($arg)
    {
        $this->crossSection = $arg;
        return $this;
    }

    // GET METHODS
    public function getAll()
    {
        return $this;
    }
}
