<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
