<?php
namespace Site\TourneurFraiseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Site\TourneurFraiseurBundle\Entity\Annonce;


class RegionType extends AbstractType
{
    function buildForm(FormBuilderInterface $builder, array $options){
		
		$builder
				
				->add('idDepartement',		EntityType::class,array('label'=>false,'class'=>'SiteTourneurFraiseurBundle:Departement'))
				->add('Save',			SubmitType::class,array('label'=>'Rechercher les offres'))
					;
						
		
		
	}
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Annonce::class,
        ));
    }

}


?>