<?php

namespace  Business\AnnuaireBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        // $choices = array('nothing'=>'---Choix---','Pro'=>'Professionnel','Part'=>'Particulier');
        // parent::buildForm($builder, $options);
         
$builder
         
         ->add('email', 'text', array('label' => 'Email:'))
         ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe:'),
                'second_options' => array('label' => 'Confirmer le mot de passe:'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
         ->add('nom','text',array('label' => 'Nom:'))
         ->add('prenom','text',array('label' => 'Prénom:'))
         ->add('telephone','text',array('label' => 'Téléphone:'))
        
        
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\User'
        ));
    }

    public function getName()
    {
        return 'annuaire_usertype';
    }
}
