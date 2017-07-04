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
}
