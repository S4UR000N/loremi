<?php

// src/Model/ProcessParagraphModelService.php
namespace App\Service;

class ProcessParagraphModelService
{
    private $paras;

    public function processParagraphs(array $paras)
    {
        $this->paras = $paras;
        return $this->paras;
    }
}
