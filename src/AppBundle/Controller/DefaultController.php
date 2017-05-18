<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $result = 0;

        $a = $request->get('a');
        $b = $request->get('b');
        $operation = $request->get('operation');

        $calculator = $this->get('app.calculator');

        return $this->render('default/index.html.twig', [
            'result' => $calculator->calculate($a, $b, $operation),
            'operation' => $operation,
            'a' => $a,
            'b' => $b,
        ]);
    }
}
