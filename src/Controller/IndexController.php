<?php

// src/Controller/IndexController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

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
            $str = var_dump($arr);
            return new Response($str, Response::HTTP_OK);
        }
    }
}
