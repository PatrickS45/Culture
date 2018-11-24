<?php
/**
 * Created by PhpStorm.
 * User: sancho45
 * Date: 24/11/18
 * Time: 13:29
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class SpeciesController extends AbstractController
{

    /**
     * @Route("/mes plantes", name="species.index")
     * @return Response
     */
    public function index() : Response
    {
        return new Response ($this->render('page/species.html.twig'));
    }

}