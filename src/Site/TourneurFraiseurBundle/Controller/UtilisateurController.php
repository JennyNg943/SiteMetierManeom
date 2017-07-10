<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\TourneurFraiseurBundle\Form\Utilisateur\RecruteurModificationType;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\Utilisateur\CandidatModificationType;
use Site\TourneurFraiseurBundle\Form\Utilisateur\EmployeurModificationType;

class UtilisateurController extends Controller
{
	
	public function changeAction(Request $request)
    {
		$user = $this->getUser();
		if($user->getType() == "Recruteur" || $user->getType() == "Admin"){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
		$utilisateur = $repository->find($user);
		$form = $this->createForm(RecruteurModificationType::class, $utilisateur);
		}
		
		if($user->getType() == "Employeur"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
			$utilisateur = $repository->find($user);
			$form = $this->createForm(EmployeurModificationType::class, $utilisateur);
		}	
		if($user->getType() == "Candidat"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
			$utilisateur = $repository->find($user);
			$form = $this->createForm(CandidatModificationType::class, $utilisateur);
		}
		$valide = 0;
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($utilisateur);
				$em->flush();
				$valide = 1;
			}
		}
		
        return $this->render('SiteTourneurFraiseurBundle:Utilisateur:ModificationInformation.html.twig',array('form'=>$form->createView(),'utilisateur'=>$utilisateur,'valide'=>$valide));
    }
	
	
}
