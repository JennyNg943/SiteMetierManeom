<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\RegionType;
use Site\TourneurFraiseurBundle\Form\Annonce\AnnonceAjoutType;

class AnnonceController extends Controller
{
    public function EspaceCandidatAction(Request $request)
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Annonce');
		$listeAnnonce = $repository->getAnnonce();
		$form = $this->createForm(RegionType::class);

		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$dept = $form->get('idDepartement')->getData();
				$listeAnnonce = $repository->getDepartement($dept);
				
			}
		}
		
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($listeAnnonce,$request->query->get('page', 1),5);
		
        return $this->render('SiteTourneurFraiseurBundle:Annonce:OffresEmploi.html.twig',array('listeAnnonce'=>$listeAnnonce,'pagination'=>$pagination,'form' => $form->createView()));
    }
	
	public function ajoutAction(Request $request){
		
		$annonce = new \Site\TourneurFraiseurBundle\Entity\Sy_Annonce;
		$form = $this->createForm(AnnonceAjoutType::class,$annonce);
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
			$user = $this->getUser();
			if($user->getType()=="Employeur"){
				$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
				$recruteur = $repository->find($user->getId());
				$annonce->setIdEmployeur($recruteur);
			}else{
				$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
				$recruteur = $repository->find($user->getId());
				$annonce->setIdRecruteur($recruteur);
			}
				$em = $this->getDoctrine()->getManager();
				$em->persist($annonce);
				$em->flush();
				return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjoutConfirmation.html.twig',array('form'=>$form->createView(),'annonce'=>$annonce));
			}
		}
		
		return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjout.html.twig',array('form'=>$form->createView()));
	}
	
	public function modifAction($id,Request $request){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository->find($id);
		$form = $this->createForm(AnnonceAjoutType::class,$annonce);
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($annonce);
				$em->flush();
				return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjoutConfirmation.html.twig',array('form'=>$form->createView(),'annonce'=>$annonce));
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjout.html.twig',array('form'=>$form->createView()));
	}
}
