<?php
namespace Site\TourneurFraiseurBundle\Form\Annonce;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Site\TourneurFraiseurBundle\Entity\Sy_Annonce;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Site\TourneurFraiseurBundle\Repository\DepartementRepository;
use Site\TourneurFraiseurBundle\Form\Annonce\Sy_SiteType;


class AnnonceAjoutType extends AbstractType
{
    function buildForm(FormBuilderInterface $builder, array $options){
		
		$builder
				
				->add('TitreAnnonce',		TextType::class,array('label'=>'Titre de l\'annonce*'))
				->add('DescriptifAnnonce',	TextareaType::class,array('attr' => array('rows' => '2'),'label'=>'Description du poste*'))
				->add('ProfilRecherche',	TextareaType::class,array('attr' => array('rows' => '2'),'label'=>'Profil Recherché*'))
				
				->add('Remuneration',		TextType::class,array('label'=>'Rémunération*'))
				->add('avantage',			TextType::class,array(
							'required'		=> false,
							'label'			=> 'Avantages'
				))
				->add('GrandeVilleProche',	TextType::class,array('label'=>'Grande ville proche*'))
				->add('idDepartement',		EntityType::class,array(
						'class'			=> 'SiteTourneurFraiseurBundle:Departement',
						'label'			=> 'Departement*',
						'placeholder'	=> '',
						'query_builder'	=> function (DepartementRepository $er) {
											return $er->getDepartementAnnonce();}))
				->add('CodePostal',			NumberType::class,array(
					'label'				=> 'Code postal*'
				))
				->add('idNiveauSouhaite',	EntityType::class,array(
						'class'			=> 'SiteTourneurFraiseurBundle:Niveausouhaite',
						'choice_label'	=> 'intituleNiveauSouhaite',
						'label'			=> 'Niveau*',
						'placeholder'	=>	''))
				
				->add('idTypeContrat',		EntityType::class,array(
						'class'			=>	'SiteTourneurFraiseurBundle:Typecontrat',
						'choice_label'	=>	'intituletypecontrat',
						'label'			=>	'Type de contrat*',
						'placeholder'	=>	''
				))
				->add('idHoraire',			EntityType::class,array(
						'class'			=>	'SiteTourneurFraiseurBundle:Horaire',
						'choice_label'	=>	'intitulehoraire',
						'label'			=>	'Horaire*',
						'placeholder'	=>	''
				))
				->add('nbHeure',			TextType::class,array('label' => 'Nombre d\' heure*'))
				->add('Reference',			TextType::class,array(
						'label'			=>	'Référence de l\'annonce*'))
				->add('site',				CollectionType::class,array(
						'entry_type'   => Sy_SiteType::class,
						'allow_add'    => true,
						'allow_delete' => true,
						'by_reference' => false,
						'label'			=>false,
						))
				
				->add('Save',			SubmitType::class,array('label'=>'Ajouter cette annonce'))
					;
						
		
		
	}
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Sy_Annonce::class,
        ));
    }

}


?>