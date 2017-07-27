<?php
namespace Site\TourneurFraiseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;



class ContactCandidatType extends AbstractType
{
    function buildForm(FormBuilderInterface $builder, array $options){
		
		$builder
				->add('Object',			TextType::class)
				->add('Message',			TextareaType::class)
				->add('Envoyer',			SubmitType::class)
				;
	}
	

}


?>