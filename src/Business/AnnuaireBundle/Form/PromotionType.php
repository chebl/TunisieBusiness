<?php

namespace Business\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PromotionType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
             $builder
           ->add('nom','text',array('label'=>'Nom :'))
           ->add('prenom','text',array('label'=>'Prenom :')) 
                ->add('titre','text',array('label'=>'Ttitre Promotion :'))
                ->add('telephone','text',array('label'=>'Téléphone :'))
                     
               ->add('description','textarea',array('label'=>'Description :'))
             
                     ->add('file','file',array('label'=>'Photo :','required' => false))
                     
                
        
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\Promotion'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_promotion';
    }
}
