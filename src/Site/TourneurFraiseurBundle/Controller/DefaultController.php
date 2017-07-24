<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\ContactType;

class DefaultController extends Controller
{
    public function indexAction()
    {
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$listeCandidat = $repository->getDernierCandidat();
		$repositoryAnnonce = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Annonce');
		$listeAnnonce = $repositoryAnnonce->getDerniereAnnonce();
		
        return $this->render('SiteTourneurFraiseurBundle:Default:index.html.twig',array('listecandidat'=>$listeCandidat,'listeannonce'=>$listeAnnonce));
    }
	
	public function monEspaceAction(){
		$user = $this->getUser();
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
		$recruteur = $repository->find($user->getId());
		if($recruteur == null){
			$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
			$recruteur = $repository->find($user->getId());
			if($recruteur == null){
				$repository = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
				$recruteur = $repository->find($user->getId());
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Default:monEspace.html.twig',array('utilisateur'=>$recruteur));
	}
	
	public function contactAction(Request $request){
		
		$form = $this->createForm(ContactType::class);
		if ($request->isMethod('POST')) {
			if ($form->handleRequest($request)->isValid()) {
				$to = array('support@recrutic.com', 'm.lopez@maneom.com');
				$message = \Swift_Message::newInstance()
						->setSubject($form->get('Sujet')->getData())
						->setFrom($form->get('Mail')->getData())
						->setTo($to)
						->setBody($form->get('Message')->getData());
					$this->get('mailer')->send($message);
				return $this->render('SiteTourneurFraiseurBundle:Default:ContactOk.html.twig');	
			}
		}
		return $this->render('SiteTourneurFraiseurBundle:Default:Contact.html.twig',array('form'=>$form->createView()));
	}
	
	public function infoAction(Request $request){
		return $this->render('SiteTourneurFraiseurBundle:Default:InfoUtiles.html.twig');
	}
}
