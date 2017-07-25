<?php

namespace Site\TourneurFraiseurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Site\TourneurFraiseurBundle\Form\PubType;
use Site\TourneurFraiseurBundle\Form\FormPubType;

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
	
	public function formPubAction(Request $request){
		$form = $this->createForm(FormPubType::class);
		$repository = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Sy_Siteemploi');
        $site = $repository->find(15);
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			$message = \Swift_Message::newInstance()
				->setSubject('Reponse PUB')
				->setFrom($form->get('Mail')->getData())
				->setTo('m.lopez@maneom.com')
				->setBody("Reponse à votre pub de ".$form->get('Nom')->getData()." ".$form->get('Prenom')->getData().". \n Mail : ".$form->get('Mail')->getData().". \n Téléphone : ".$form->get('Tel')->getData().". \n Code Postal : ".$form->get('CodePostal')->getData().". \n Societe : ".$form->get('Societe')->getData())
				;
			$this->get('mailer')->send($message);
			return $this->redirect($site->getPub()->getRedirection());
		}
		
		return $this->render('SiteTourneurFraiseurBundle:Admin:FormPub.html.twig',array('site'=>$site,'form'=>$form->createView()));
	}
}

?>