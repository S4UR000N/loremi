<?php

// src/Model/ProcessParagraphModelService.php
namespace App\Service;

class ProcessParagraphModelService
{
    private $paras;
    private $parasDex;

    public function processParagraphs(array $paras)
    {
        $this->paras = $paras;
        return $this->paras;
    }

    public function applySoundex()
    {
        
    }
}
