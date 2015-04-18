<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/getTours", name="homepage")
     */
    public function getToursAction()
    {
        return new JsonResponse([1 => 'Ознакомительный тур по Вологде', 2 => 'Ознакомительный тур по Череповцу']);
    }

    /**
     * @Route("/getTourDetails/{tourId}")
     */
    public function getTourDetailsAction($tourId)
    {
        return new JsonResponse([
            ['name' => 'Точка 1', 'latitude' => 39.958789, 'longitude' => 59.212444],
            ['name' => 'Точка 2', 'latitude' => 39.959789, 'longitude' => 59.222444],
        ]);
    }
}
