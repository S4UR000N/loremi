<?php

// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Service\SmithWatermanGotohService;
use App\Service\SmithWatermanMatchMismatchService;

use App\Service\PopulateParagraphModelService;
use App\Service\PopulateTextModelService;
use App\Service\PopulateSimilarityModelService;

use App\Service\ProcessParagraphModelService;


class IndexController extends AbstractController
{
    public function indexGET(): Response
    {
        /*
        $o = new SmithWatermanGotohService();
        $o = $o->compare(
            "LEGENDARY"
            ,
            "LEGiNDcRY");
        */
    return $this->render('index.html.twig', /*['o' => $o]*/);
    }

    public function indexPOST(): Response
    {
        if(isset($_POST['apiRequest']))
        {
            $apiResponse = file_get_contents($_POST['apiRequest']);
            return new Response($apiResponse, Response::HTTP_OK);
        }
        if(isset($_POST['txtsObj']))
        {
            $textsRaw = json_decode($_POST['txtsObj'], true);
            $texts = [];

            /*
            foreach($textsRaw as $text_id => $text)
            {
                foreach($text as $paragraph_id => $words)
                {
                    $populateParagraphModelService = new PopulateParagraphModelService();
                    $populateParagraphModelService->populateParagraphModel($text_id, $paragraph_id, $words);
                    array_push($paras, $populateParagraphModelService->getParagraphModel());
                }
            }

            $processParagraphModelService = new ProcessParagraphModelService();
            $processParagraphModelService = $processParagraphModelService->processParagraphs($paras);
            */
            // $str = $populateParagraphModelService0->test();
            // return new Response(json_encode(["paras" => $paras, "process" => $processParagraphModelService]), Response::HTTP_OK);
            return new Response(json_encode($arr), Response::HTTP_OK);
        }
    }
}
