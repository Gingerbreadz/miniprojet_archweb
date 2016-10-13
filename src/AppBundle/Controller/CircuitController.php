<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Circuit;

/**
 * Circuit controller.
 */
class CircuitController extends Controller
{	/**
     * HomePage
     *
     * @Route("/home", name="page_accueil")
     * @Method("GET")
     */
	public function showMainPageAction()
	{
		return $this->render('circuit/home.html.twig');
	}
	
	/**
	 * Actuality
	 *
	 * @Route("/actuality", name="page_actualite")
	 * @Method("GET")
	 */
	public function showActualityPageAction()
	{
		return $this->render('circuit/actuality.html.twig');
	}
	
	
	
    /**
     * Lists all Circuit entities.
     *
     * @Route("/circuit/", name="circuit_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $circuits = $em->getRepository('AppBundle:Circuit')->findAll();

        return $this->render('circuit/index.html.twig', array(
            'circuits' => $circuits,
        ));
    }

    /**
     * Finds and displays a Circuit entity.
     *
     * @Route("/circuit/{id}", name="circuit_show", requirements={
	 *              "id": "\d+"
	 *     })
     * @Method("GET")
     */
    public function showAction(Circuit $circuit)
    {
        return $this->render('circuit/show.html.twig', array(
            'circuit' => $circuit,
        ));
    }

}
