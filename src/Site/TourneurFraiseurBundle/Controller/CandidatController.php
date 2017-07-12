<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\TourneurFraiseurBundle\Form\Utilisateur\RecruteurModificationType;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundleu\Form\Utilisateur\CandidatModificationType;
use Site\TourneurFraiseurBundleu\Form\Utilisateur\EmployeurModificationType;
use Site\TourneurFraiseurBundle\Form\RegionType;
use Site\TourneurFraiseurBundle\Form\Candidature\CandidatureType;
use Swift_Attachment;


class CandidatController extends Controller
{
	
	public function cvAction(Request $request)
    {
		$erreur="";
		$user = $this->getUser();
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$candidat = $repository->find($user->getId());
		$candidat->setMailCandidat($user->getEmail())->setCvcandidat(null);
		$form = $this->createForm(CandidatureType::class, $candidat);
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$file = $candidat->getCvcandidat();
				$fileName = $user->getEmail().'.'.$file->guessExtension();
				$file->move($this->getParameter('CV_directory'),$fileName);
				
				$em = $this->getDoctrine()->getManager();
				$em->persist($candidat);
				$em->flush();
				
				$message = \Swift_Message::newInstance()
					->setSubject('Nouveau CV posé depuis TOURNEUR FRAISEUR')
					->setFrom($user->getEmail())
					->setTo('a.bouteille@maneom.com')
					->setBody('Un nouveau candidat vient de déposer un CV depuis TOURNEURFRAISEUR.')
					->attach(Swift_Attachment::fromPath($fileName))	;
				$this->get('mailer')->send($message);
				
				return $this->render('SiteTourneurFraiseurBundle:Default:ContactOk.html.twig');
			}
		}	
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Candidature.html.twig',array(
			'candidat'	=> $candidat,
			'form'		=> $form->createView(),
			'erreur'	=> $erreur
			));
    }
	
	public function CVthequeAction(Request $request)
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$form = $this->createForm(RegionType::class);
		$candidat = $repository->getCVThequeTrie(null);
		$form->handleRequest($request);
			if ($form->isSubmitted() && $form->isValid()) {
				$dept = $form->get('idDepartement')->getData();
				
				$candidat = $repository->getCVThequeTrie($dept);
				
				
			}	
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
		$candidat,
		$request->query->get('page',1),8
		);
		
        return $this->render('SiteTourneurFraiseurBundle:Candidat:CvTheque.html.twig',array(
			'pagination' => $pagination,
			'form' => $form->createView()));
    }
	
	public function ConsultationAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$candidat = $repository->find($id);
		
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Consultation.html.twig',array(
			'candidat'	=> $candidat
			));
	}
	
	public function candidatureAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository->find($id);
		if($annonce == null){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Annonce');
			$annonce = $repository->find($id);
		}
		$repositoryCandidat = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$user = $this->getUser();
		$candidat = $repositoryCandidat->find($user->getId());
		$candidat->setMailCandidat($user->getEmail())->setCvcandidat(null);
		$form = $this->createForm(CandidatureType::class, $candidat);
		$erreur="";
		foreach ($annonce->getFonction() as $f){
			if(($repositoryCandidat->getCandidatFonction($candidat,$f->getIdFonction()))==null){
				$candidat->addFonction($f->getIdFonction());
			}
		}
		foreach($candidat->getAnnonce() as $a){
			if($a == $annonce){
				$erreur = "Vous avez déjà postulé à cette annonce";
			}
		}
			if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
				if($erreur == "Vous avez déjà postulé à cette annonce"){
					return $this->render('SiteTourneurFraiseurBundle:Candidat:Candidature.html.twig', array('form' => $form->createView(),'annonce'=>$annonce,'erreur'=>$erreur));
				}else{
					if($annonce->getNew() == 1){
						$candidat->addSyAnnonce($annonce);
					}else{
						$candidat->addAnnonce($annonce);
					}
					$file = $candidat->getCvcandidat();
					$fileName = $user->getEmail().'.'.$file->guessExtension();
					$file->move($this->getParameter('CV_directory'),$fileName);

					$em = $this->getDoctrine()->getManager();
					$em->persist($candidat);
					$em->flush();
					$recruteur = $annonce->getIdRecruteur();
					if($recruteur == null){
						$recruteur = $annonce->getIdEmployeur();
					}
					$titre = $annonce->getTitreAnnonce();
					$reference = $annonce->getReference();
					$body = "Candidature de ".$candidat->getIdcivilite()." ".$candidat->getNomCandidat()." ".$candidat->getPrenomCandidat()." pour le poste de ".$titre." ref : ".$reference.".\n"
							. $candidat->getIdcivilite()." ".$candidat->getNomCandidat()." habite à ".$candidat->getVilleCandidat()." (".$candidat->getCP().").\n"
							. "Le commentaire suivant a été ajouté : ".$candidat->getCommentaire().".\n"
							."\n"
							."Pour contacter ce candidat, il suffit de répondre à ce message.";
					$message = \Swift_Message::newInstance()
						->setSubject('Nouveau candidat TOURNEUR-FRAISEUR pour le poste '.$titre)
						->setFrom($user->getEmail())
						->setTo('support@recrutic.com')
						->setBody($body)
						->attach(Swift_Attachment::fromPath($fileName))	;
					$this->get('mailer')->send($message);
				  return $this->render('SiteTourneurFraiseurBundle:Candidat:AnnonceAjoutConfirmation.html.twig');
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Candidature.html.twig', array('form' => $form->createView(),'annonce'=>$annonce,'erreur'=>$erreur));
		
		
	}
	
	public function mesCandidaturesAction(){
		return $this->render('SiteTourneurFraiseurBundle:Candidat:MesCandidatures.html.twig');
	}
	
}
