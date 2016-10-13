<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Circuit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Controller used to manage circuit contents.
 *
 */
class AdminController extends Controller
{
	/**
	 * Creates a new circuit entity, or modify an existing one.
	 *
	 * Create a new circuit
	 * @Route("/manage/circuit/new", name="admin_circuit_new")
	 * 
	 * Or edit contents of an existing circuit
	 * @Route("/manage/circuit/{circuitid}/edit", name="admin_circuit_edit")
	 * 
	 * Or edit a draft previously saved in the session
	 * @Route("/manage/circuit/{circuitid}/remove", name="admin_circuit_remove")
	 */
	public function newAction($circuitid = null, Request $request)
	{
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		}
		
		// If called for edition, load the circuit from the DB 
		if ($circuitid) {
			$circuit = $this->getDoctrine()
			->getRepository('AppBundle:Circuit')
			->find($circuitid);
			
			dump($circuit);
			
			if (!$circuit) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
			
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
				throw $this->createAccessDeniedException();
			}
		}
		else {
			if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
				throw $this->createAccessDeniedException();
			}
			
			$circuit = new Circuit();
		}

		// Construct the form
		$formBuilder = $this->createFormBuilder($circuit)
		->add('description', TextType::class)
		->add('paysDepart', TextType::class)
		->add('villeDepart', TextType::class)
		->add('villeArrivee', TextType::class)
		->add('villeDepart', TextType::class);
		
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			//Special Admin Feature
		}
		
		$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Valider'))
		->getForm();
		
		$form->handleRequest($request);
		
		if ($form->isSubmitted() && $form->isValid()) {

			//$circuit->setSlug($this->get('slugger')->slugify($circuit->getTitle()));
		
				// Persist for good in the DB
				$entityManager = $this->getDoctrine()->getManager();
				$entityManager->persist($circuit);
				
				$entityManager->flush();
			
				// We may have created a new circuit of edidting an existing one
				if($circuitid) {
					$message = 'circuit '. $circuit->getId() .' modifié avec succès';
				} else {
					$message = 'circuit '. $circuit->getId() .' créé avec succès';
				}
				$this->addFlash('success', $message);
				
				// either way, display the circuit
				return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId()]);
		}
		return $this->render('admin/new.html.twig', [
				'form' => $form->createView(),
		]);
	}
	
	/**
	 * Deletes a Circuit entity.
	 * @Route("/manage/circuit/{circuitid}/remove", name="admin_circuit_remove")
	 */
	
	public function delAction($circuitid = null, Request $request)
	{
		if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			throw $this->createAccessDeniedException();
		}
		
		$circuit = $this->getDoctrine()
		->getRepository('AppBundle:Circuit')
		->find($circuitid);
	
		$entityManager = $this->getDoctrine()->getManager();
		$entityManager->remove($circuit);
	
		dump($circuit);
	
		$entityManager->flush();
	
		$this->addFlash('success', 'Circuit '. $circuit->getId() .'supprimé avec succès');
		return $this->redirect('/circuit');
	
	}
	
}