<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class IndexController extends AbstractController
{
    public function indexGET(): Response
    {
        return $this->render('index.html.twig');
    }

    public function indexPOST(): Response
    {
        $apiResponse = file_get_contents($_POST['apiRequest']);
        return new Response($apiResponse, Response::HTTP_OK);
    }
}
