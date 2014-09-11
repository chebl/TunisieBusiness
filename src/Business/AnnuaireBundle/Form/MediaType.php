<?php

namespace Business\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MediaType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
       $builder
            ->add('file','file',array('required' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\Media',
             'csrf_protection' => false,
        ));
    }
     public function getDefaultOptions(array $options) {
        return array(
        'data_class' => 'Business\AnnuaireBundle\Entity\Media',
            'csrf_protection' => false,
    );
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_media';
    }
}
