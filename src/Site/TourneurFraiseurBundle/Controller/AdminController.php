<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\PubType;

class AdminController extends Controller
{
	public function pubAction(Request $request){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Siteemploi');
        $site = $repository->find(15);
        $form = $this->createForm(PubType::class, $site);
 
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $site->getPub()->upload();
            $em = $this->getDoctrine()->getManager();
            $em->persist($site);
            $em->flush();
            return $this->redirectToRoute('Espace');
        }
        return $this->render('SiteTourneurFraiseurBundle:Admin:ModifSite.html.twig',array('form'=>$form->createView()));
	}
	
	public function AffichagePubAction(Request $request){
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Siteemploi');
        $site = $repository->find(15);
        
        return $this->render('SiteTourneurFraiseurBundle:Admin:AffichagePub.html.twig',array('site'=>$site));
	}
}

?>