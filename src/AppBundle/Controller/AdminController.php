<?php
namespace AppBundle\Controller;

use AppBundle\Entity\Circuit;
use AppBundle\Entity\Etape;
use AppBundle\Entity\ProgrammationCircuit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
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
		->add('villeArrivee', TextType::class);
		
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
				'circuit' => $circuit,
		]);
	}
	
	/**
	 * Creates and Edit stop-over of a circuit.
	 *
	 * Create a new stop-over
	 * @Route("/manage/circuit/{circuitid}/etape/new", name="admin_etape_new")
	 * 
	 * Or edit contents of an existing stop-over
	 * @Route("/manage/circuit/{circuitid}/etape/{etapeid}/edit", name="admin_etape_edit")
	 */	
	public function newetapeAction($circuitid, $etapeid = null, Request $request)
	{
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		}
	
		$circuit = $this->getDoctrine()
		->getRepository('AppBundle:Circuit')
		->find($circuitid);
		
		if (!$circuit) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		
		dump($circuit);
		
		// If called for edition, load the circuit from the DB
		if ($etapeid) {
			$etape = $this->getDoctrine()
			->getRepository('AppBundle:Etape')
			->find($etapeid);
				
			dump($etape);
				
			if (!$etape) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
		}
		else {
			
			$etape = new Etape();
			$etape->setCircuit($circuit);
		}
	
		// Construct the form
		$formBuilder = $this->createFormBuilder($etape)
		->add('numeroEtape', NumberType::class)
		->add('villeEtape', TextType::class)
		->add('nombreJours', NumberType::class);
		
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			//Special Admin Feature
		}
		
		$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Valider'))
		->getForm();
		$form->handleRequest($request);
	
		if ($form->isSubmitted() && $form->isValid()) {
		
			//$circuit->setSlug($this->get('slugger')->slugify($circuit->getTitle()));
			$circuit->addEtape($etape);
			$circuit->updateLastEtape();
			// Persist for good in the DB
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($etape);
			$entityManager->persist($circuit);
		
			$entityManager->flush();
				
			// We may have created a new circuit of edidting an existing one
			if($etapeid) {
				$message = 'etape '. $etape->getId() .' modifié avec succès';
			} else {
				$message = 'etape '. $etape->getId() .' créé avec succès';
			}
			$this->addFlash('success', $message);
		
			// either way, display the circuit
			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId()]);
		}
		return $this->render('admin/new.html.twig', [
				'form' => $form->createView(),
				'circuit' => $circuit,
				'etape' => $etape,
		]);
	
	}	

	/**
	 * Creates and Edit stop-over of a circuit.
	 *
	 * Create a new stop-over
	 * @Route("/manage/circuit/{circuitid}/programmation/new", name="admin_programmation_new")
	 *
	 * Or edit contents of an existing stop-over
	 * @Route("/manage/circuit/{circuitid}/programmation/{programmationid}/edit", name="admin_programmation_edit")
	 */	
	public function newprogrammationAction($circuitid, $programmationid = null, Request $request)
	{
		if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		}
	
		$circuit = $this->getDoctrine()
		->getRepository('AppBundle:Circuit')
		->find($circuitid);
	
		if (!$circuit) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
	
		dump($circuit);
	
		// If called for edition, load the circuit from the DB
		if ($programmationid) {
			$programmation = $this->getDoctrine()
			->getRepository('AppBundle:ProgrammationCircuit')
			->find($programmationid);
	
			dump($programmation);
	
			if (!$programmation) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
		}
		else {
				
			$programmation = new ProgrammationCircuit();
			$programmation->setCircuit($circuit);
		}
	
		// Construct the form
		$formBuilder = $this->createFormBuilder($programmation)
		->add('dateDepart', DateType::class)
		->add('nombrePersonnes', NumberType::class)
		->add('prix', NumberType::class);
	
		if ($this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			//Special Admin Feature
		}
	
		$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Valider'))
		->getForm();
		$form->handleRequest($request);
	
		if ($form->isSubmitted() && $form->isValid()) {
	
			//$circuit->setSlug($this->get('slugger')->slugify($circuit->getTitle()));
			$circuit->addProgrammation($programmation);
			// Persist for good in the DB
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($programmation);
			$entityManager->persist($circuit);
	
			$entityManager->flush();
	
			// We may have created a new circuit of edidting an existing one
			if($programmationid) {
				$message = 'programmation '. $programmation->getId() .' modifié avec succès';
			} else {
				$message = 'programmation '. $programmation->getId() .' créé avec succès';
			}
			$this->addFlash('success', $message);
	
			// either way, display the circuit
			return $this->redirectToRoute('circuit_show', ['id' => $circuit->getId()]);
		}
		return $this->render('admin/new.html.twig', [
				'form' => $form->createView(),
				'circuit' => $circuit,
				'programmation' => $programmation,
		]);	
	}	
	
	/**
	 * Deletes a Circuit entity.
	 * @Route("/manage/circuit/{circuitid}/remove", name="admin_circuit_remove")
	 * 
	 * Or Deletes a Stop-Over entity.
	 * @Route("/manage/circuit/{circuitid}/etape/{etapeid}/remove", name="admin_etape_remove")
	 * 
	 * Or Deletes a Programmation entity.
	 * @Route("/manage/circuit/{circuitid}/programmation/{programmationid}/remove", name="admin_programmation_remove")
	 */	
	public function delAction($circuitid, $etapeid = null, $programmationid = null, Request $request)
	{
		if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
			throw $this->createAccessDeniedException();
		}
		
		$circuit = $this->getDoctrine()
		->getRepository('AppBundle:Circuit')
		->find($circuitid);
		
		if (!$circuit) {
			// cause the 404 page not found to be displayed
			throw $this->createNotFoundException();
		}
		
		// If removing a Stop-over
		if ($etapeid) {
			$etape = $this->getDoctrine()
			->getRepository('AppBundle:Etape')
			->find($etapeid);
		
			if (!$etape) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
			$circuit->removeEtape($etape);
			
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($etape);
			
			dump($etape);
			
			$entityManager->flush();
			
			$this->addFlash('success', 'Etape '. $etape->getId() .'supprimé avec succès');
			return $this->redirect('/circuit/' . $circuitid);
			
		}
		// If removing a Programmation
		elseif ($programmationid) {
			$programmation = $this->getDoctrine()
			->getRepository('AppBundle:ProgrammationCircuit')
			->find($programmationid);
		
			if (!$programmation) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
			$circuit->removeProgrammation($programmation);
				
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($programmation);
				
			dump($programmation);
				
			$entityManager->flush();
				
			$this->addFlash('success', 'Programmation '. $programmation->getId() .'supprimé avec succès');
			return $this->redirect('/circuit/' . $circuitid);
				
		}
		else{
			
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->remove($circuit);
			
			dump($circuit);
			
			$entityManager->flush();
			
			$this->addFlash('success', 'Circuit '. $circuit->getId() .'supprimé avec succès');
			return $this->redirect('/circuit');
						
		}	
	}
}