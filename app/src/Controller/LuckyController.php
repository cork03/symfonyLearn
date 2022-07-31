<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends AbstractController
{
    /**
     *
     * @return Response
     */
    public function number() : Response
    {
        $number = random_int(0, 100);
        $generatedUrl = $this->generateUrl('lucky_number');

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'url' => $generatedUrl,
        ]);
    }

    /**
     * json test
     *
     * @return JsonResponse
     */
    public function testJson() : JsonResponse
    {
        return $this->json(['test' => 'test']);
    }
}
