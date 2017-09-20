<?php
/**
 * @package
 * @author      Wojciech Jaroń <wojciech.jaron@webanywhere.co.uk> Date: 20.09.17 Time: 11:30
 */

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DisplayController extends Controller
{
    /**
     * Testing Controller.
     *
     * @Route("/display/main")
     */
    public function mainAction()
    {

        //return new Response(
        //        '<html><body>Hi! Here\'s my main page!</body></html>'
        //);

        $text = 'Hello there';

        return $this->render('display/main.html.twig', array(
                'text' => $text,
                ));
    }
}