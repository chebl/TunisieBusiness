<?php

namespace Business\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContactType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
          $builder
           ->add('nom','text',array('label'=>'Nom :'))
           ->add('prenom','text',array('label'=>'Prénom :')) 
           ->add('email','text',array('label'=>'Email :')) 
          ->add('telephone','text',array('label'=>'Téléphone :')) 
          ->add('message','textarea',array('label'=>'Message :')) 
                  ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\Contact'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_contact';
    }
}
