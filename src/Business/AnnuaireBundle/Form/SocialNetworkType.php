<?php

namespace Business\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SocialNetworkType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
         $builder
           ->add('urlfb','text',array('label'=>'Facebook :'))
           ->add('urltwitter','text',array('label'=>'Twitter :'))
           ->add('urlyoutube','text',array('label'=>'Youtube :'))
           ->add('urllinkedin','text',array('label'=>'Linkedin :'))
           ->add('urlgoogleplus','text',array('label'=>'google+ :'))
           ->add('urlsiteweb','text',array('label'=>'Site Web :'))
                 
          
                
        
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\SocialNetwork'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_socialnetwork';
    }
}
