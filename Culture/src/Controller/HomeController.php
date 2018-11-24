<?php
/**
 * Created by PhpStorm.
 * User: sancho45
 * Date: 22/11/18
 * Time: 18:51
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController
{
    /**
     * @var $twig
     */
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }


    /**
     * @Route("/", name="home")
     * @return Response
     */
    public function index() : Response
    {
        return new Response ($this->twig->render('page/home.html.twig'));
    }
}