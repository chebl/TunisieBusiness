<?php

namespace Business\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Business\AnnuaireBundle\Entity\User;
use Business\AnnuaireBundle\Form\UserType;
use Business\AnnuaireBundle\Form\CompanyType;
use Business\AnnuaireBundle\Entity\Annonce;
use Business\AnnuaireBundle\Form\AnnonceType;
use Business\AnnuaireBundle\Entity\Promotion;
use Business\AnnuaireBundle\Form\PromotionType;

use Business\AnnuaireBundle\Form\SocialNetworkType;
use Business\AnnuaireBundle\Entity\SocialNetwork;

class ProfilController extends Controller
{
    public function mesinfosAction()
    {
         $user = $this->get('security.context')->getToken()->getUser();
        
        $entity =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->find($user->getId());
        
        $form   = $this->createForm(new UserType(), $entity);
        
        $request = $this->get('request');
        
         if ('POST' === $request->getMethod()) {
             $form->bind($request);
      $data = $form->getData();
       $email=$data->getEmail();
        $entity->setUsername($email);
        $entity->setUsernameCanonical($email);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('annuaire_mescoordonness'));
        }
         }
         
        return $this->render('BusinessAnnuaireBundle:Profil:mescoordonnes.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
        
      
    }
    
        
    public function socialnetworkcompanyAction() {
        
    
     
            $user = $this->get('security.context')->getToken()->getUser();
            $entity1 =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:SocialNetwork')->findOneBy(array('societe'=>$user->getId()));
          if(!$entity1) {
              
       $entity = new SocialNetwork();
              
          } 
    else {   
         $entity=$entity1;
    }
        $form   = $this->createForm(new SocialNetworkType(), $entity);
        
        $request = $this->get('request');
        
         if ('POST' === $request->getMethod()) {
             $form->bind($request);
             $entity->setSociete($user);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
   $url = $this->get('router')->generate('annuaire_monespace');
                    $response = new RedirectResponse($url);
                    return $response; 
        }        
         }
       return $this->render('BusinessAnnuaireBundle:Profil:socialnetwork.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),  
           ));
    }
    
    
    
    
    
    public function infossocieteAction()
    {
         $user = $this->get('security.context')->getToken()->getUser();
        
        $entity =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->find($user->getId());
         $domaines = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Domaine')->findAll();
        $form   = $this->createForm(new CompanyType(), $entity);
        
        $request = $this->get('request');
        
         if ('POST' === $request->getMethod()) {
            $form->bind($request);
      $data = $form->getData();
       $email=$data->getEmail();
        $entity->setUsername($email);
        $entity->setTypecompte("Pro");
        $entity->setUsernameCanonical($email);
        $specialite=$request->request->get('listspecialiteann');
            $spec = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Specialite')->find($specialite);
            $entity->setSpecialite($spec);
        if ($form->isValid()) {
                $entity->upload();
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('annuaire_editpage'));
        }
         }
         
        return $this->render('BusinessAnnuaireBundle:Profil:coordonnesociete.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
             'domaines'=>$domaines
        ));
        
      
    }
    
    
     public function monespaceAction()
    {
          $user = $this->get('security.context')->getToken()->getUser();
         
        $repository = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce');  
        
        $mesannonces=$repository->findBy(array('annonceur' =>$user->getId()));
      
         
          return $this->render('BusinessAnnuaireBundle:Profil:monespace.html.twig',array('mesannonces'=>$mesannonces));
     
    }
    
    public function ajoutpromotionAction($id=null) {
  
      $em = $this->getDoctrine()->getManager();
    
            $entity =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->find($id);
    
            if(!$entity) {
              
       $entity = new Promotion();
              
          } 
      
        $form   = $this->createForm(new PromotionType(), $entity);
          $user = $this->get('security.context')->getToken()->getUser();
        
          $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request); 
            
    	//if ($form1->isValid()) {
               $entity->upload();
               
               //$entity->redimensionner_image($entity->getUploadRootDir('maladies').'/'.$entity->getPath(), 1024, 768);
               $entity->setPromoteur($user);
               $entity->setDatepublication(new \DateTime());
                $em->persist($entity);
               $em->flush();
        
         $url = $this->get('router')->generate('annuaire_monespace');
                    $response = new RedirectResponse($url);
                    return $response; 
        
          
    }
          return $this->render('BusinessAnnuaireBundle:Profil:promotion.html.twig',array('form' => $form->createView(),'entity'=>$entity,'id'=>$id));
      
    
}

    public function mespromotionsAction() {
    
        $user = $this->get('security.context')->getToken()->getUser();
         
        $repository = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion');  
        
        $mespromotions=$repository->findBy(array('promoteur' =>$user->getId()));
      
         
          return $this->render('BusinessAnnuaireBundle:Profil:mespromotions.html.twig',array('mespromotions'=>$mespromotions));
     
    }
    
   public function deletepromotionAction($id) {
    
         $request = $this->get('request');
         $em = $this->getDoctrine()->getManager();
      
           $promotion = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->find($id);  
    
           $em->remove($promotion);
            $em->flush();
          
    //}
       $url = $this->get('router')->generate('annuaire_mespromotions');
                    $response = new RedirectResponse($url);
                    return $response; 
      
    
}   
    
     public function sousCategorieAction(Request $request)
    {  
         
       if('POST' === $request->getMethod()) {
                
               $categorie=$request->request->get('categ');
         
           $repository = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:SousCategorie');  
    $souscategorie=$repository->findBy(array('categorie' =>$categorie));
     
     // $m=$request->request->get('cate');
 
}
return $this->render('BusinessAnnuaireBundle:Profil:listsouscategorie.html.twig',array('souscategorie'=>$souscategorie));  
    }
    
    public function ajoutannonceAction()
    {
         $em = $this->getDoctrine()->getManager();
       
       $entity = new Annonce();
        $form   = $this->createForm(new AnnonceType(), $entity);
          $user = $this->get('security.context')->getToken()->getUser();
        $categories = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Categorie')->findAll();
          $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request); 
            $souscategorie=$request->request->get('listsouscategoriesann');
            $souscateg = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:SousCategorie')->find( $souscategorie);
    	//if ($form1->isValid()) {
               $entity->upload();
               
               //$entity->redimensionner_image($entity->getUploadRootDir('maladies').'/'.$entity->getPath(), 1024, 768);
               $entity->setAnnonceur($user);
               $entity->setDatepublication(new \DateTime());
               $entity->setUpdated(new \DateTime());
               
               $entity->setSouscategorie($souscateg);
               $em->persist($entity);
               $em->flush();
        
         $url = $this->get('router')->generate('annuaire_monespace');
                    $response = new RedirectResponse($url);
                    return $response; 
        
          
    }
          return $this->render('BusinessAnnuaireBundle:Profil:ajoutannonce.html.twig',array('form' => $form->createView(),'categories'=>$categories));
   
    }
    
   public function editannonceAction($id) {
    
        $em = $this->getDoctrine()->getManager();
       
       $user = $this->get('security.context')->getToken()->getUser();
        
      $entity =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->find($id);
        
        $form   = $this->createForm(new AnnonceType(), $entity);
    
        $categories = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Categorie')->findAll();
          $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request); 
            $souscategorie=$request->request->get('listsouscategoriesann');
            $souscateg = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:SousCategorie')->find($souscategorie);
    	//if ($form1->isValid()) {
               $entity->upload();
               
               //$entity->redimensionner_image($entity->getUploadRootDir('maladies').'/'.$entity->getPath(), 1024, 768);
               $entity->setAnnonceur($user);
               //$entity->setDatepublication(new \DateTime());
               $entity->setUpdated(new \DateTime());
               
               $entity->setSouscategorie($souscateg);
               $em->persist($entity);
               $em->flush();
        
        $url = $this->get('router')->generate('annuaire_monespace');
                    $response = new RedirectResponse($url);
                    return $response; 
        
          
}

      return $this->render('BusinessAnnuaireBundle:Profil:editannonce.html.twig',array('form' => $form->createView(),'categories'=>$categories,'id'=> $entity->getId()));
   
    }
    

    public function deleteannonceAction($id) {
    
         $request = $this->get('request');
         $em = $this->getDoctrine()->getManager();
      
           $annonce = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->find($id);  
    
           $em->remove($annonce);
            $em->flush();
          
    //}
       $url = $this->get('router')->generate('annuaire_monespace');
                    $response = new RedirectResponse($url);
                    return $response; 
      
    
}

  public function reppromotionsAction() {
    $user = $this->get('security.context')->getToken()->getUser();
     $reponses = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepPromotion')->getLatestReponses($user->getId());
  
     return $this->render('BusinessAnnuaireBundle:Profil:mesreponsespromotions.html.twig',array('reponses' => $reponses));
   
  }   
     public function repannoncesAction() {
    
         $user = $this->get('security.context')->getToken()->getUser();
         $reponses = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepAnnonce')->getLatestReponses($user->getId());
  
     return $this->render('BusinessAnnuaireBundle:Profil:mesreponsesannonces.html.twig',array('reponses' => $reponses));
     
  } 
  public function detailsreppromotionAction($id) {
       
            $request = $this->get('request');
            $em = $this->getDoctrine()->getManager();
      
           $reponse = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepPromotion')->find($id);  
          return $this->render('BusinessAnnuaireBundle:Profil:detailreponsepromotion.html.twig',array('reponse' => $reponse));
     
   }
  public function deletereppromAction($id) {
            $request = $this->get('request');
         $em = $this->getDoctrine()->getManager();
      
           $reponse = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepPromotion')->find($id);  
    
           $em->remove($reponse);
            $em->flush();
          
    //}
       $url = $this->get('router')->generate('annuaire_reppromotions');
                    $response = new RedirectResponse($url);
                    return $response; 
   }
   
   public function detailsrepannonceAction($id) {
       
            $request = $this->get('request');
         $em = $this->getDoctrine()->getManager();
      
           $reponse = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepAnnonce')->find($id);  
    return $this->render('BusinessAnnuaireBundle:Profil:detailreponseannonce.html.twig',array('reponse' => $reponse));
     
   }
    public function deleterepannonceAction($id) {
            $request = $this->get('request');
         $em = $this->getDoctrine()->getManager();
      
           $reponse = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:RepAnnonce')->find($id);  
    
           $em->remove($reponse);
            $em->flush();
          
    //}
       $url = $this->get('router')->generate('annuaire_repannonces');
                    $response = new RedirectResponse($url);
                    return $response; 
   }
}
   ?>
