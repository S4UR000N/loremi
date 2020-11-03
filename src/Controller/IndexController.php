<?php

// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

use App\Model\AllTextsModel;
use App\Model\TextsModel;

use App\Service\AllTextsService;
use App\Service\TextsService;

use App\Service\SmithWatermanGotohService;
use App\Service\SmithWatermanMatchMismatchService;

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
            $arr = json_decode($_POST['txtsObj'], true);
            $texts = [];

            foreach($arr as $text_id => $arr_words)
            {
                $texts[$text_id] = "";
                foreach($arr_words as $key => $words)
                {
                    $texts[$text_id] .= $words;
                }
            }

            $allTextsService = new AllTextsService();
            $allTextsModel = $allTextsService->populateAllTextsModel($texts);

            $similarityService = new SimilarityService();
            $resultsModel = $similarityService->compareTextModels($allTextsModel->getAllTextModels());

            return new Response(json_encode($resultsModel), Response::HTTP_OK);
        }
    }
}
