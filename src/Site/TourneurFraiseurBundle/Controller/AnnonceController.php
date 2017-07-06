<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\RegionType;
use Site\TourneurFraiseurBundle\Form\Annonce\AnnonceAjoutType;
use Doctrine\Common\Collections\ArrayCollection;

class AnnonceController extends Controller
{
    public function EspaceCandidatAction(Request $request)
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Annonce');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$listeAnnonce1 = $repository->getAnnonce();
		$listeAnnonce2 = $repository2->getAnnonce();
		$form = $this->createForm(RegionType::class);

		$form->handleRequest($request);
			if ($form->isSubmitted() && $form->isValid()) {
				$dept = $form->get('idDepartement')->getData();
				$listeAnnonce1 = $repository->getDepartement($dept);
				$listeAnnonce2 = $repository->getDepartement($dept);
				
			}
		$listeAnnonce = new ArrayCollection(array_merge($listeAnnonce1,$listeAnnonce2));
		$liste = $this->trieListe($listeAnnonce);
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate($liste,$request->query->get('page', 1),5);
		
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
	
	public function consultationAction(Request $request){
		$user = $this->getUser();
		if($user->getType()=="Recruteur" || $user->getType()=="Admin"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
			$recruteur = $repository->find($user->getId());
			$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
			$annonce = $repository2->findByIdRecruteur($recruteur);
		}
		if($user->getType()=="Employeur"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
			$recruteur = $repository->find($user->getId());
			$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
			$annonce = $repository2->findByIdEmployeur($recruteur);
		}
		return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceConsultation.html.twig',array('listeannonce'=>$annonce));
	}
	
	public function consultationDetailAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository->find($id);
		return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjoutConfirmation.html.twig',array('annonce'=>$annonce));
	}
	
	public function suspendreAction($id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository->find($id);
		$annonce->setSuspension(11);
		$em = $this->getDoctrine()->getManager();
		$em->persist($annonce);
		$em->flush();
		
		return $this->redirectToRoute('annonce_gestion');
	}
	
	public function desuspendreAction($id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository->find($id);
		$annonce->setSuspension(-1);
		$em = $this->getDoctrine()->getManager();
		$em->persist($annonce);
		$em->flush();
		
		return $this->redirectToRoute('annonce_gestion');
	}
	
	public function supprimerAction($id){
		$repository = $this->getDoctrine()->getManager();
		$annonce = $repository->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce')->find($id);
		$listeSite = $repository->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce_Sy_Siteemploi')->getListeSite($id);
		$em = $this->getDoctrine()->getManager();
		foreach ($listeSite as $site){
			$em->remove($site);
		}
		
		$em->remove($annonce);
		$em->flush();
		
		return $this->redirectToRoute('annonce_gestion');
	}
	
	
	//A faire
	public function candidatureAction(){
		$user = $this->getUser();
		if($user->getType()=="Recruteur" || $user->getType()=="Admin"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
			$recruteur = $repository->find($user->getId());
			$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
			$annonce = $repository2->findByIdRecruteur($recruteur);
		}
		if($user->getType()=="Employeur"){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
			$recruteur = $repository->find($user->getId());
			$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
			$annonce = $repository2->findByIdEmployeur($recruteur);
		}
	}
	
	
	function trieListe($liste){
		$listeannonce = new ArrayCollection();
		$tmp = new ArrayCollection();
		$tmp2 = new ArrayCollection();
		foreach ($liste as $annonce){
			if(($annonce->getPremium())==1){
				$listeannonce->add($annonce);
			}else{
				$tmp->add($annonce);
			}
		}
		
		foreach ($tmp as $annonce){
			if($annonce->getNew() == 1){
				$listeannonce->add($annonce);
			}else{
				$tmp2->add($annonce);
			}
		}
			
			foreach ($tmp2 as $annonce){
				$listeannonce->add($annonce);
			}
			
		
		
		return $listeannonce;
	}
}
