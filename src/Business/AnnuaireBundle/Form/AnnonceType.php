<?php

namespace Business\AnnuaireBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AnnonceType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
         $choices = array('nothing'=>'---Choix---','semaine'=>'1 semaine','deuxsemaines'=>'2 semaines');
       
         $lieux=array('nothing'=>'---Sélectionnez---','Ariana'=>'Ariana','Béja'=>'Béja','Ben Arous'=>'Ben Arous','Bizerte'=>'Bizerte','Gabès'=>'Gabès','Gafsa'=>'Gafsa',
             'Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana',
             'Jendouba'=>'Jendouba','Kairouan'=>'Kairouan','Kasserine'=>'Kasserine','Kébili'=>'Kébili','Kef'=>'Kef',
             'Mahdia'=>'Mahdia','Mannouba'=>'Mannouba','Médenine'=>'Médenine','Monastir'=>'Monastir','Nabeul'=>'Nabeul',
             'Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana','Sousse'=>'Sousse','Tataouine'=>'Tataouine','Tozeur'=>'Tozeur','Tunis'=>'Tunis','Zaghouan'=>'Zaghouan');
        $builder
           ->add('titre','text',array('label'=>'Titre Annonce :'))
           ->add('description','textarea',array('label'=>'Description :')) 
           ->add('dureevalidite','choice',array(
                   'label'=>'Durée de validité :',
                  'choices'  => $choices,
                  'expanded' => false,
                ))
               ->add('lieu','choice',array(
                   'label'=>'Lieu : ',
                  'choices'  => $lieux,
                  'expanded' => false,
                ))
                ->add('prix','text',array('label'=>'Prix :'))
              ->add('file','file',array('label'=>'Photo :'))
                
        
        
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Business\AnnuaireBundle\Entity\Annonce'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'annuaire_annuairebundle_article';
    }
}
