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
    public function processParagraphs(array $paras)
    {
        $this->paras = $paras;
        $this->parasDex = $this->applySoundex($this->paras);
        return $this->parasDex;
    }

    public function applySoundex($paras)
    {
        $parasDex = [];
        foreach($paras as $arrKey => $obj)
        {
            $parasDex[$arrKey] = [];
            foreach($obj as $objKey => $val)
            {
                if(is_array($val))
                {
                    foreach($val as $k => $v)
                    {
                        $parasDex[$arrKey][$objKey][$k] = soundex($v);
                    }
                }
                else
                {
                    $parasDex[$arrKey][$objKey] = $val;
                }

            }
        }
        return $parasDex;
    }
}
