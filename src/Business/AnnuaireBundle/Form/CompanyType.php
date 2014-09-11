<?php

namespace  Business\AnnuaireBundle\Form;


use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
class CompanyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        // parent::buildForm($builder, $options);
          $lieux=array('nothing'=>'---Sélectionnez---','Ariana'=>'Ariana','Béja'=>'Béja','Ben Arous'=>'Ben Arous','Bizerte'=>'Bizerte','Gabès'=>'Gabès','Gafsa'=>'Gafsa',
             'Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana',
             'Jendouba'=>'Jendouba','Kairouan'=>'Kairouan','Kasserine'=>'Kasserine','Kébili'=>'Kébili','Kef'=>'Kef',
             'Mahdia'=>'Mahdia','Mannouba'=>'Mannouba','Médenine'=>'Médenine','Monastir'=>'Monastir','Nabeul'=>'Nabeul',
             'Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana','Sousse'=>'Sousse','Tataouine'=>'Tataouine','Tozeur'=>'Tozeur','Tunis'=>'Tunis','Zaghouan'=>'Zaghouan');
       
$builder
         
         ->add('email', 'text', array('label' => 'Email:'))
         ->add('plainPassword', 'repeated', array(
                'type' => 'password',
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Mot de passe:'),
                'second_options' => array('label' => 'Confirmer le mot de passe:'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        
         ->add('telephone','text',array('label' => 'Téléphone:'))
        ->add('nomsociete','text',array('label' => 'Nom :'))
        ->add('description','textarea',array('label' => 'Description:'))
        
        ->add('adresse','text',array('label' => 'Adresse:'))
        ->add('codepostal','text',array('label' => 'Code postal:'))
                  ->add('ville','choice',array(
                   'label'=>'Ville : ',
                  'choices'  => $lieux,
                  'expanded' => false,))
        ->add('file','file',array('label' => 'Logo:'))
        
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
        return 'annuaire_companytype';
    }
}
