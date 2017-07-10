<?php
namespace Site\TourneurFraiseurBundle\Form\Utilisateur;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Site\TourneurFraiseurBundle\Repository\DepartementRepository;
use Site\TourneurFraiseurBundle\Repository\SiteRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class CandidatModificationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	
        $builder
		->remove('username')		
		->add('idCivilite',				EntityType::class,array(
				'label'			=> 'Civilite* :',
				'class'			=> 'SiteTourneurFraiseurBundle:Sy_Civilite',
				'choice_label'	=> 'intitulecivilite',
			'placeholder'	=> ''
				
		))
		->add('nomCandidat',			TextType::class,array(
				'label'			=> 'Nom* :',
				
		))
		->add('prenomCandidat',			TextType::class,array(
				'label'			=> 'Prenom* :',
				
		))				
		->add('villeCandidat',			TextType::class,array(
				'label'			=> 'Ville :',
				'required'		=> false
				
		))	
		->add('Departement',				EntityType::class,array(
			'class'			=> 'SiteTourneurFraiseurBundle:Departement',
			'label'			=> 'Département* :',
			'placeholder'	=> '',
			'query_builder' => function(DepartementRepository $er) {
								return $er->getDeptTri();}
		))
		->add('CP',				TextType::class,array(
			'label'			=> 'CP* :'
			))
		->add('telportcandidat',			IntegerType::class,array(
				'label'			=> 'Telephone* :',
				
		))			
		->add('site',					EntityType::class,array(
				'label'=>'Domaine préféré* :',
				'class'=>'SiteTourneurFraiseurBundle:Sy_Siteemploi',
				'choice_label'=>'domaine',
				'placeholder'	=> '',
				'query_builder' => function(SiteRepository $er) {
									return $er->getSiteTri();}))		
		->add('newsletter',				ChoiceType::class,array(
			'choices'		=> array(
				'Oui'	=> true,
				'Non'	=>false
				
				),
				'label'=>'Ne pas recevoir d\'offres d\'emploi',
				'required'=>false))				
		->add('save', SubmitType::class,array('label'=>'Confirmer mes informations'));
    
    }
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => \Site\UserBundle\Entity\Sy_Candidature::class,
        ));
    }
	
}










?>