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
