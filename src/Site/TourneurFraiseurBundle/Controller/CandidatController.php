<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\TourneurFraiseurBundle\Form\Utilisateur\RecruteurModificationType;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundleu\Form\Utilisateur\CandidatModificationType;
use Site\TourneurFraiseurBundleu\Form\Utilisateur\EmployeurModificationType;
use Site\TourneurFraiseurBundle\Form\RegionType;

class CandidatController extends Controller
{
	
	public function cvAction(Request $request)
    {
		$user = $this->getUser();
		
        return $this->render('SiteTourneurFraiseurBundle:Utilisateur:ModificationInformation.html.twig',array('form'=>$form->createView(),'utilisateur'=>$utilisateur,'valide'=>$valide));
    }
	
	public function CVthequeAction(Request $request)
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$form = $this->createForm(RegionType::class);
		$candidat = $repository->findByIdSite(15);
		$form->handleRequest($request);
			if ($form->isSubmitted() && $form->isValid()) {
				$dept = $form->get('idDepartement')->getData();
				
				$candidat = $repository->getCVThequeTrie($dept);
				
				
			}	
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
		$candidat,
		$request->query->get('page',1),10
		);
		
        return $this->render('SiteTourneurFraiseurBundle:Candidat:CvTheque.html.twig',array(
			'pagination' => $pagination,
			'form' => $form->createView()));
    }
	
}
