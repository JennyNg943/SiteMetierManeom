<?php

namespace Site\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Site\TourneurFraiseurBundle\Entity\Sy_CvTheque;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteUserBundle:Default:Inscription.html.twig');
    }
	
	//Inscription des candidats avec utilisation de PUGXMultiUser.
	public function CandidatAction()
    {
		
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Site\UserBundle\Entity\Sy_Candidature');
    }
	
	//Inscription des recruteur avec utilisation de PUGXMultiUser.
	public function RecruteurAction()
    {
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Site\UserBundle\Entity\Sy_Recruteur');
    }
	
	//Inscription des employeurs avec utilisation de PUGXMultiUser.
	public function EmployeurAction()
    {
        return $this->container
                    ->get('pugx_multi_user.registration_manager')
                    ->register('Site\UserBundle\Entity\Sy_Employeur');
    }
	
	public function inscriptionCompleteAction(){
		$repository1 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Recruteur');
		$repository2 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Candidature');
		$repository4 = $this->getDoctrine()->getManager()->getRepository('SiteUserBundle:Sy_Employeur');
		$repository3 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:UtilisateurRole');
		$user = $this->getUser();
		$id	= $user->getId();
		$candidat = $repository2->find($id);
		$recruteur = $repository1->find($id);
		$employeur = $repository4->find($id);
		if($candidat != null){
			$type = $repository3->find(1);
			$user->setType($type);
			$repository5 = $this->getDoctrine()->getManager()->getRepository('SiteTourneurFraiseurBundle:Ville');
			$ville = $repository5->findOneByCodePostal($candidat->getCp());
			$cvtheque = new Sy_CvTheque();
			$cvtheque->setNom($candidat->getNomCandidat())->setPrenom($candidat->getPrenomCandidat())->setCodePostal($ville)->setMail($user->getEmail())->setIdSite($candidat->getSite());
			$em = $this->getDoctrine()->getManager();
					$em->persist($cvtheque);
					$em->flush();
		}
		if($recruteur != null){
			$type = $repository3->find(2);
			$user->setType($type);
		}
		if($employeur != null){
			$type = $repository3->find(4);
			$user->setType($type);
		}
		
		$user->addRole('ROLE_USER');
		$this->get('fos_user.user_manager')->updateUser($user, false);
		$this->getDoctrine()->getManager()->flush();
		return $this->render('SiteUserBundle:Default:InscriptionOK.html.twig');
	}
}
