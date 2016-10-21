<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

/**
 * User Management controller.
 */
class UserManagementController extends Controller
{	
	/**
     * User Management Hub
     *
     * @Route("/manage/users", name="admin_users_manage")
     * @Method("GET")
     */
    public function indexAction()
    {
        // Only admin can access this route
    	if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
    		throw $this->createAccessDeniedException();
    	}
    	
        $em = $this->getDoctrine()->getManager();
        
        $users = $em->getRepository('AppBundle:User')->findAll();     

        return $this->render('admin/hub.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Add or Edit a User
     *
     * Create a new User
     * @Route("/manage/users/new", name="admin_users_new")
     *
     * Or edit 
     * @Route("/manage/users/{userid}/edit", name="admin_users_edit")
     */
    public function newAction($userid = null, Request $request)
    {
        // Only admin can access this route
   		 if (!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
			throw $this->createAccessDeniedException();
		 }

		// If called for edition, load the user from the DB
		if ($userid) {
			$user = $this->getDoctrine()
			->getRepository('AppBundle:User')
			->find($userid);
				
			dump($user);
				
			if (!$user) {
				// cause the 404 page not found to be displayed
				throw $this->createNotFoundException();
			}
		}
		else {	
			$user = new User();
		}
		
		// Construct the form
		$formBuilder = $this->createFormBuilder($user)
		->add('username', TextType::class)
		->add('password', PasswordType::class)
		->add('email', EmailType::class)
		->add('nom', TextType::class)
		->add('prenom', TextType::class)
		->add('adresse', TextAreaType::class);
				
		$form = $formBuilder->add('save', SubmitType::class, array('label' => 'Valider'))
		->getForm();
		
		$form->handleRequest($request);

        //Encode password; needed to connect successfully
		$passwordEncoder = $this->container->get('security.password_encoder');
		$encodedPassword = $passwordEncoder->encodePassword($user, $form["password"]->getData());
		$user->setPassword($encodedPassword);
        $user->setEnabled(true);

		if ($form->isSubmitted() && $form->isValid()) {
				
			//Call user update method from userManager
			$userManager = $this->get('fos_user.user_manager');
			$userManager->updateUser($user);
            // Persist for good in the DB
			$entityManager = $this->getDoctrine()->getManager();
			$entityManager->persist($user);
		
			$entityManager->flush();
				
			// We may have created a new user or edidting an existing one
			if($userid) {
				$message = 'utilisateur '. $user->getId() .' modifié avec succès';
			} else {
				$message = 'utilisateur '. $user->getId() .' créé avec succès';
			}
			$this->addFlash('success', $message);
		
			// either way, display the user management hub
			return $this->redirectToRoute('admin_users_manage');
		}
		return $this->render('admin/new.html.twig', [
				'form' => $form->createView(),
				'user' => $user,
		]);
    }

    /**
     * Delete a User entity
     * @Route("/manage/users/{userid}/remove", name="admin_users_remove")
     */
    public function delAction($userid, Request $request)
    {
        // Only admin can access this route
    	if (!$this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
    		throw $this->createAccessDeniedException();
    	}
    	
    	$user = $this->getDoctrine()
    	->getRepository('AppBundle:User')
    	->find($userid);
    	
    	if (!$user) {
    		// cause the 404 page not found to be displayed
    		throw $this->createNotFoundException();
    	}
    	
    	$userManager = $this->get('fos_user.user_manager');
    	$userManager->deleteUser($user);
    	
    	$entityManager = $this->getDoctrine()->getManager();
    	$entityManager->remove($user);
    		
    	dump($user);
    		
    	$entityManager->flush();
    		
    	$this->addFlash('success', 'Utilisateur '. $user->getId() .'supprimé avec succès');
    	return $this->redirect('/manage/users');
    }
}
