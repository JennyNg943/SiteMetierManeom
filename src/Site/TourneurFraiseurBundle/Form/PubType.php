<?php
namespace Site\TourneurFraiseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Site\TourneurFraiseurBundle\Form\ImageType;
use Symfony\Component\OptionsResolver\OptionsResolver;



class PubType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
        ->add('pub',        ImageType::class,array('label'=>'Banniere'))
		->add('Confirmer', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);
	
  }
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Site\TourneurFraiseurBundle\Entity\Sy_Siteemploi'
    ));
  }
}


?>