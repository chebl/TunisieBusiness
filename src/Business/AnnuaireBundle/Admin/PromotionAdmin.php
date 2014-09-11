<?php

namespace Business\AnnuaireBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PromotionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
           
            ->add('nom')
            ->add('prenom')
            ->add('titre')
            ->add('telephone')
            ->add('description')
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
           
            ->add('nom')
            ->add('prenom')
            ->add('titre')
            ->add('telephone')
            ->add('description')
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
        $formMapper
           ->add('nom','text',array('label'=>'Nom :'))
           ->add('prenom','text',array('label'=>'Prenom :')) 
           ->add('titre','text',array('label'=>'Ttitre Promotion :'))
           ->add('telephone','text',array('label'=>'Téléphone :'))
           ->add('description','textarea',array('label'=>'Description :'))
           ->add('file','file',array('label'=>'Photo :','required' => false))
         ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            
            ->add('nom')
            ->add('prenom')
            ->add('titre')
            ->add('telephone')
            ->add('description')
            ->add('path')
            ->add('datepublication')
        ;
    }
}
