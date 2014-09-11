<?php

namespace Business\AnnuaireBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class AnnonceAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('titre')
            ->add('description')
            ->add('dureevalidite')
            ->add('lieu')
            ->add('prix')
            ->add('path')
            ->add('datepublication')
            
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('titre')
            ->add('description')
            ->add('dureevalidite')
            ->add('lieu')
            ->add('prix')
            ->add('path')
            ->add('datepublication')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $choices = array('nothing'=>'---Choix---','semaine'=>'1 semaine','deuxsemaines'=>'2 semaines');
       
         $lieux=array('nothing'=>'---Sélectionnez---','Ariana'=>'Ariana','Béja'=>'Béja','Ben Arous'=>'Ben Arous','Bizerte'=>'Bizerte','Gabès'=>'Gabès','Gafsa'=>'Gafsa',
             'Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana','Ariana'=>'Ariana',
             'Jendouba'=>'Jendouba','Kairouan'=>'Kairouan','Kasserine'=>'Kasserine','Kébili'=>'Kébili','Kef'=>'Kef',
             'Mahdia'=>'Mahdia','Mannouba'=>'Mannouba','Médenine'=>'Médenine','Monastir'=>'Monastir','Nabeul'=>'Nabeul',
             'Sfax'=>'Sfax','Sidi Bouzid'=>'Sidi Bouzid','Siliana'=>'Siliana','Sousse'=>'Sousse','Tataouine'=>'Tataouine','Tozeur'=>'Tozeur','Tunis'=>'Tunis','Zaghouan'=>'Zaghouan');
        $formMapper
            
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
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
            ->add('titre')
            ->add('description')
            ->add('dureevalidite')
            ->add('lieu')
            ->add('prix')
            ->add('path')
            
        ;
    }
}
