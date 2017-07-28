<?php
namespace Site\TourneurFraiseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class FormPubType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('Nom',	TextType::class)
			->add('Prenom',	TextType::class)
			->add('Tel',	TextType::class)
			->add('Mail', \Symfony\Component\Form\Extension\Core\Type\EmailType::class)
			->add('CodePostal', \Symfony\Component\Form\Extension\Core\Type\NumberType::class)
			->add('Societe', TextType::class,array('required' => false,'label'=>'Société (facultatif)'))
			->add('Remarque',	TextareaType::class,array('required'=>false))
			->add('Confirmer', SubmitType::class)	
				;
				

	}				

}


?>
