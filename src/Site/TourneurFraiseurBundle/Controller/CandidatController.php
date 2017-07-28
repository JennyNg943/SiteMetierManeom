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
use Site\TourneurFraiseurBundle\Form\ContactCandidatType;


class CandidatController extends Controller
{
	
	public function cvAction(Request $request)
    {
		$erreur="";
		$user = $this->getUser();
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_CvTheque');
		$candidat = $repository->find($user->getId());
		$candidat->setMailCandidat($user->getEmail())->setCvcandidat(null);
		$form = $this->createForm(CandidatureType::class, $candidat);
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$file = $candidat->getCvcandidat();
				$fileName = $user->getEmail().'.'.$file->guessExtension();
				$file->move($this->getParameter('CV_directory'),$fileName);
				$cv = $repository2->findOneByMail($user->getEmail());
				$cv->setUrl("http://tourneurs-fraiseurs.com/web/".$fileName);
				$em = $this->getDoctrine()->getManager();
				$em->persist($candidat);
				$em->persist($cv);
				$em->flush();
				$message = \Swift_Message::newInstance() 
				->setSubject('Nouveau CV posé depuis TOURNEUR FRAISEUR') 
				->setFrom($user->getEmail()) 
				->setTo('m.lopez@maneom.com') 
				->setBody('Un nouveau candidat vient de déposer un CV depuis TOURNEURFRAISEUR.') 
				->attach(Swift_Attachment::fromPath($fileName))  ; 
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
		$candidat = $repository->getCVThequeTrie(null);
		$form = $this->createForm(RegionType::class);
		
		
		$form->handleRequest($request);
			if ($form->isSubmitted()) {
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
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Siteemploi');
		$candidat = $repository->find($id);
		$site = $repository2->find(15);
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Consultation.html.twig',array(
			'candidat'	=> $candidat,
			'site'		=> $site
			));
	}
	
	public function consultationUserAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Fonction');
		$candidat = $repository->find($id);
		$session = $request->getSession();
		$domaine = $session->get('fonction');
		if($domaine != null){
			$site = $repository2->find($domaine);
		}else{
			$site = null;
		}
		
		
		return $this->render('SiteTourneurFraiseurBundle:Candidat:ConsultationCVThequeUser.html.twig',array(
			'candidat'=>$candidat,
			'domaine'=>$site));
	}
	
	public function candidatureAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$repository4 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$annonce = $repository->find($id);
		if($annonce == null){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Annonce');
			$annonce = $repository->find($id);
		}
		$repositoryCandidat = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$user = $this->getUser();
		$candidat = $repositoryCandidat->find($user->getId());
		$erreur="";
		
		foreach($candidat->getAnnonce() as $a){
			if($a == $annonce){
				
				$erreur = "Vous avez déjà postulé à cette annonce";
			}
		}
		foreach($candidat->getSyAnnonce() as $b){
			if($b == $annonce){
				
				$erreur = "Vous avez déjà postulé à cette annonce";
			}
		}
		$candidat->setMailCandidat($user->getEmail())->setCvcandidat(null);
		$form = $this->createForm(CandidatureType::class, $candidat);
			if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
				if($erreur == "Vous avez déjà postulé à cette annonce"){
					return $this->render('SiteTourneurFraiseurBundle:Candidat:Candidature.html.twig', array('form' => $form->createView(),'annonce'=>$annonce,'erreur'=>$erreur));
				}else{
					foreach ($annonce->getFonction() as $f){
						if(($repositoryCandidat->getCandidatFonction($candidat,$f->getIdFonction()))==null){
							$candidat->addFonction($f->getIdFonction());
						}
					}
					$cv = $repository4->findOneByMail($user->getEmail());
					
					if($annonce->getNew() == 1){
						$candidat->addSyAnnonce($annonce);
						$cv->addSyAnnonce($annonce);
					}else{
						$candidat->addAnnonce($annonce);
						$cv->addAnnonce($annonce);
					}
					$file = $candidat->getCvcandidat();
					$fileName = $user->getEmail().'.'.$file->guessExtension();
					$file->move($this->getParameter('CV_directory'),$fileName);
					$cv->setUrl("http://tourneurs-fraiseurs.com/web/".$fileName);
					$em = $this->getDoctrine()->getManager();
					$em->persist($candidat);
					$em->persist($cv);
					$em->flush();
					$recruteur = $annonce->getIdRecruteur();
					if($recruteur == null){
						$recruteur = $annonce->getIdEmployeur();
					}
					$titre = $annonce->getTitreAnnonce();
					$reference = $annonce->getReference();
					$body = "Bonjour, \n \n"
							. "Vous avez reçu une candidature de ".$candidat->getIdcivilite()." ".$candidat->getNomCandidat()." ".$candidat->getPrenomCandidat()." pour le poste de ".$titre." ref : ".$reference.".\n"
							. $candidat->getIdcivilite()." ".$candidat->getNomCandidat()." habite à ".$candidat->getVilleCandidat()." (".$candidat->getCP().").\n"
							. "Le commentaire suivant a été ajouté : ".$candidat->getCommentaire().".\n"
							."\n"
							."Pour contacter ce candidat, il suffit de répondre à ce message."
							. "\n"
							. "\n"
							. "Ref site : ".$annonce->getId();
					$message = \Swift_Message::newInstance()
						->setSubject('Nouveau candidat TOURNEUR-FRAISEUR pour le poste '.$titre)
						->setFrom($user->getEmail())
						//->setTo($recruteur->getEmail())
						->setTo('a.bouteille@maneom.com')
						->setBody($body)
						->attach(Swift_Attachment::fromPath($fileName))	;
					$this->get('mailer')->send($message);
				  return $this->render('SiteTourneurFraiseurBundle:Annonce:AnnonceAjoutConfirmation.html.twig',array('annonce'=>$annonce));
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Candidature.html.twig', array('form' => $form->createView(),'annonce'=>$annonce,'erreur'=>$erreur));
		
		
	}
	
	public function mesCandidaturesAction(){
		return $this->render('SiteTourneurFraiseurBundle:Candidat:MesCandidatures.html.twig');
	}
	
	public function CVthequeUserAction(Request $request,$id)
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$annonce = $repository2->find($id);
		$session = $request->getSession();
		foreach($annonce->getFonction() as $fonction){
			$candidat = $repository->getCVThequeByFonction($fonction->getIdFonction());
			$session->set('fonction',$fonction->getIdFonction());
		}
		$session->set('annonce',$annonce->getId());	
		$paginator = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
		$candidat,
		$request->query->get('page',1),10
		);
        return $this->render('SiteTourneurFraiseurBundle:Candidat:CvThequeUser.html.twig',array(
			'pagination' => $pagination,
			));
    }
	
	public function contactAction(Request $request,$id){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_CvTheque');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
		$repository3 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$session = $request->getSession();
		$idAnnonce = $session->get('annonce');
		$annonce = $repository3->find($idAnnonce);
		$candidat = $repository->find($id);
		$user = $this->getUser();
		if(($recruteur = $repository2->find($user->getId()))==null){
			$repository3 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
			$recruteur = $repository3->find($user->getId());
		}
		$form = $this->createForm(ContactCandidatType::class);
		
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$annonce->addCandidatContact($candidat);
				$em = $this->getDoctrine()->getManager();
				$em->persist($annonce);
				$em->flush();
				$message = \Swift_Message::newInstance()
						->setSubject($form->get('Object')->getData())
						->setFrom($user->getEmail())
						->setTo($candidat->getMail())
						//->setTo('a.bouteille@maneom.com')
						->setBody($form->get('Message')->getData());
					$this->get('mailer')->send($message);
				return $this->render('SiteTourneurFraiseurBundle:Default:ContactOk.html.twig');
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Candidat:Contact.html.twig',array('form' => $form->createView()));
	}
	
}
