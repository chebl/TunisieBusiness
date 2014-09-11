<?php

namespace Business\AnnuaireBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class UserAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('username')
            ->add('email')
            ->add('firstname')
            ->add('lastname')
            ->add('phone')
            ->add('nom')
            ->add('prenom')
            ->add('nomsociete')
            ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            //->add('username')
            ->add('email')
            //->add('enabled')
            //->add('expiresAt')
            //->add('roles')
            //->add('createdAt')
            //->add('updatedAt')
            //->add('dateOfBirth')
            //->add('firstname')
            //->add('lastname')
            //->add('website')
            //->add('typecompte')
           ->add('telephone')
            ->add('nomsociete')
            //->add('description')
            ->add('adresse')
            //->add('codepostal')
            ->add('ville')
            //->add('path')
            //->add('dateinscription')
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
         $choices = array('nothing'=>'---Choix---','Pro'=>'Professionnel','Part'=>'Particulier');
        
        $formMapper
            ->with('Mon Profil')   
           ->add('username','text',array('label'=>'Username:'))
           ->add('email','email',array('label'=>'Email :'))
            ->add('password','password',array('label'=>'Mot de passe:'))
        ->with('Management')        
            ->add('roles')
        /*->with('General')        
           // ->add('dateOfBirth')
            //->add('firstname','text',array('label'=>'Nom utilisateur:'))
            //->add('lastname')
            //->add('website')
            //->add('biography')
            //->add('gender')
            //->add('locale')
            //->add('timezone')
            
                ->add('phone')
         ->with('Social')
            ->add('facebookUid')
            ->add('facebookName')
            ->add('facebookData')
            ->add('twitterUid')
            ->add('twitterName')
            ->add('twitterData')
            ->add('gplusUid')
            ->add('gplusName')
            ->add('gplusData')
         ->with('Security')   
            ->add('token')
            ->add('twoStepVerificationCode')
         */ 
          ->with('Informations supplémentaires')
        
            ->add('nom')
            ->add('prenom')
            ->add('typecompte','choice',array(
                   'label'=>'Type de compte:',
                  'choices'  => $choices,
                  'expanded' => false,
                ))
            ->add('telephone')
            ->add('nomsociete')
            ->add('description')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
           // ->add('path')
           // ->add('dateinscription')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->with('Mon Profil')   
           ->add('username','text',array('label'=>'Username:'))
            ->add('email','email',array('label'=>'Email :'))
            ->add('password','password',array('label'=>'Mot de passe:'))
        ->with('Management')        
            ->add('roles')
        /*->with('General')        
           // ->add('dateOfBirth')
            //->add('firstname','text',array('label'=>'Nom utilisateur:'))
            //->add('lastname')
            //->add('website')
            //->add('biography')
            //->add('gender')
            //->add('locale')
            //->add('timezone')
            
                ->add('phone')
         ->with('Social')
            ->add('facebookUid')
            ->add('facebookName')
            ->add('facebookData')
            ->add('twitterUid')
            ->add('twitterName')
            ->add('twitterData')
            ->add('gplusUid')
            ->add('gplusName')
            ->add('gplusData')
         ->with('Security')   
            ->add('token')
            ->add('twoStepVerificationCode')
         */ 
          ->with('Informations supplémentaires')
        
            ->add('nom')
            ->add('prenom')
            ->add('typecompte','choice',array(
                   'label'=>'Type de compte:',
                  'choices'  => $choices,
                  'expanded' => false,
                ))
            ->add('telephone')
            ->add('nomsociete')
            ->add('description')
            ->add('adresse')
            ->add('codepostal')
            ->add('ville')
            //->add('path')
           // ->add('dateinscription')
        ;
             
        ;
    }
}
