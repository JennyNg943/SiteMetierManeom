<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\RegionType;

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
		
        return $this->render('SiteTourneurFraiseurBundle:EspaceCandidat:OffresEmploi.html.twig',array('listeAnnonce'=>$listeAnnonce,'pagination'=>$pagination,'form' => $form->createView()));
    }
}
