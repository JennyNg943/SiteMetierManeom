<?php
namespace Site\TourneurFraiseurBundle\Form\Candidature;

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
use Site\TourneurFraiseurBundle\Repository\AnnonceRepository;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Site\TourneurFraiseurBundle\Repository\SiteRepository;

class CandidatureType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {	
		
        $builder
		->add('idCivilite',				EntityType::class,array(
				'label'			=> 'Civilite :',
				'class'			=> 'SiteTourneurFraiseurBundle:Sy_Civilite',
				'choice_label'	=> 'intitulecivilite',
				
		))
		->add('prenomCandidat',			TextType::class,array(
				'label'			=> 'Prenom :',
				
		))	
		->add('nomCandidat',			TextType::class,array(
				'label'			=> 'Nom :',
				
		))			
		->add('mailcandidat',			EmailType::class,array(
				'label'			=> 'Mail Contact :',
				
		))			
		->add('villeCandidat',			TextType::class,array(
				'label'			=> 'Ville :',
				
		))	
		->add('CP',				TextType::class,array(
			'label'			=> 'CP'
			))
		->add('telportcandidat',			IntegerType::class,array(
				'label'			=> 'Telephone :',
				
		))			
		->add('cvcandidat',				FileType::class,array('label'=>'CV'))
		->add('commentaire',			TextareaType::class,array(
				'label'			=> 'Commentaire'))
		->add('save',						SubmitType::class,array('label'	=> 'Envoyer cette candidature'))		
    ;
    }
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => \Site\UserBundle\Entity\Sy_Candidature::class,
        ));
    }
}










?>