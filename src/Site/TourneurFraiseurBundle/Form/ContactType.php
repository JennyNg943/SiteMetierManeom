<?php
namespace Site\TourneurFraiseurBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;



class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('Mail', \Symfony\Component\Form\Extension\Core\Type\EmailType::class)
			->add('Sujet',	TextType::class)
			->add('Message',TextareaType::class)
			->add('Envoyer', SubmitType::class);
				

	}				

}


?>
