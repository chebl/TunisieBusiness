<?php

namespace Business\AnnuaireBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ContactAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            
            ->add('nom')
            ->add('prenom')
            ->add('telephone')
            ->add('email')
            ->add('message')
            
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
            ->add('telephone')
            ->add('email')
            ->add('message')
            ->add('dateenvoi')
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
           ->add('prenom','text',array('label'=>'Prénom :')) 
           ->add('email','text',array('label'=>'Email :')) 
          ->add('telephone','text',array('label'=>'Téléphone :')) 
          ->add('message','textarea',array('label'=>'Message :'))
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
            ->add('telephone')
            ->add('email')
            ->add('message')
            ->add('dateenvoi')
        ;
    }
}
