<?php

namespace Business\AnnuaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

use Business\AnnuaireBundle\Entity\User;

use Business\AnnuaireBundle\Form\UserType;
use Business\AnnuaireBundle\Entity\Contact;
use Business\AnnuaireBundle\Form\ContactType;
use Business\AnnuaireBundle\Entity\RepAnnonce;
use Business\AnnuaireBundle\Entity\RepPromotion;

use Business\AnnuaireBundle\Form\CompanyType;

class AnnuaireController extends Controller
{
    
    
    public function indexAction()
    {
        return $this->render('BusinessAnnuaireBundle:Annuaire:index.html.twig');
    }
        
   public function loginAction()
    {
     /** @var $session \Symfony\Component\HttpFoundation\Session\Session */
        $request=$this->get('request');
        
        $session = $request->getSession();

        // get the error if any (works with forward and redirect -- see below)
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } elseif (null !== $session && $session->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        if ($error) {
            // TODO: this is a potential security risk (see http://trac.symfony-project.org/ticket/9523)
            $error = $error->getMessage();
        }
        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(SecurityContext::LAST_USERNAME);

        $csrfToken = $this->container->has('form.csrf_provider')
            ? $this->container->get('form.csrf_provider')->generateCsrfToken('authenticate')
            : null;
        return $this->render('BusinessAnnuaireBundle:Profil:login.html.twig',array(
            'last_username' => $lastUsername,
            'error'         => $error,
            'csrf_token' => $csrfToken,
        ));     
   }
  
       
   
    public function registerAction()
    {
         $entity = new User();
        $form   = $this->createForm(new UserType(), $entity);
        $request = $this->get('request');
        
         if ('POST' === $request->getMethod()) {
       $entity->setEnabled(true);
             $form->bind($request);
      $data = $form->getData();
       $email=$data->getEmail();
        $entity->setUsername($email);
        $entity->setUsernameCanonical($email);
        $entity->setTypecompte('Part');
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('annuaire_registerpage'));
        
            
        }
         }
         
        return $this->render('BusinessAnnuaireBundle:Annuaire:register.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
        
 }
    
  public function registercompanyAction()
    {
         $entity = new User();
        $form   = $this->createForm(new CompanyType(), $entity);
        $request = $this->get('request');
         $domaines = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Domaine')->findAll();
         if ('POST' === $request->getMethod()) {
            
       $entity->setEnabled(true);
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

            return $this->redirect($this->generateUrl('annuaire_homepage'));
        }
         }
         
        return $this->render('BusinessAnnuaireBundle:Annuaire:registercompany.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'domaines'      =>$domaines
        ));
        
 }
    
 
 
 
   public function checkEmailAction()
    {
        $email = $this->container->get('session')->get('fos_user_send_confirmation_email/email');
        $this->container->get('session')->remove('fos_user_send_confirmation_email/email');
        $user = $this->container->get('fos_user.user_manager')->findUserByEmail($email);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with email "%s" does not exist', $email));
        }
       
              
             $em=$this->container->get('doctrine')->getEntityManager();
              $this->EnvoiMailConfirmation($em, $email);
              unset($_COOKIE["verifnewsletter"]);
        return $this->container->get('templating')->renderResponse('PortailFrontBundle:Accueil:checkEmail.html.'.$this->getEngine(), array(
            'user' => $user,
            
        ));
    }

    /**
     * Receive the confirmation token from user email provider, login the user
     */
    public function confirmAction(Request $request, $token)
    {
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');

        $user = $userManager->findUserByConfirmationToken($token);

        if (null === $user) {
            throw new NotFoundHttpException(sprintf('The user with confirmation token "%s" does not exist', $token));
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $user->setConfirmationToken(null);
        $user->setEnabled(true);

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRM, $event);

        $userManager->updateUser($user);

        if (null === $response = $event->getResponse()) {
            $url = $this->container->get('router')->generate('user_registration_confirmed');
            $response = new RedirectResponse($url);
        }

        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_CONFIRMED, new FilterUserResponseEvent($user, $request, $response));

        return $response;
    }

    /**
     * Tell the user his account is now confirmed
     */
    public function confirmedAction()
    {
       
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        
        return $this->container->get('templating')->renderResponse('PortailFrontBundle:Accueil:confirmed.html.'.$this->getEngine(), array(
            'user' => $user,
            
            
        ));
    }
    
  
    

  protected function getEngine()
    {
        return 'twig';
    }
  
  public function dernierinscriptionAction() {
      
   $listsociete = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->getLatestRegister(5);    
      
      
      
  return $this->render('BusinessAnnuaireBundle:Annuaire:derniersinscriptions.html.twig',array(
      'listsocietes'=>$listsociete));
      
      } 
      
public function listannuairesAction() {
   
   
      
  return $this->render('BusinessAnnuaireBundle:Annuaire:annuairesoc.html.twig',array(
   ));
    
    
}
      
       public function dernierannoncesAction() {
      
   $listannonces = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->getLatestRegister(5);    
      
      
      
  return $this->render('BusinessAnnuaireBundle:Annuaire:derniersannonces.html.twig',array(
      'listannonces'=>$listannonces));
      
      }  
       public function dernierpromotionsAction() {
      
   $listpromotions = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->getLatestRegister(5);    
      
      
      
  return $this->render('BusinessAnnuaireBundle:Annuaire:dernierspromotions.html.twig',array(
      'listpromotions'=>$listpromotions));
      
      }  
      
      
 //Recuperer les coordonnées GPS d'une adresse
       
    
    function getXmlCoordsFromAdress($address)
{
$coords=array();
$base_url="http://maps.googleapis.com/maps/api/geocode/xml?";
// ajouter &region=FR si ambiguité (lieu de la requete pris par défaut)
$request_url = $base_url . "address=" . urlencode($address).'&sensor=false';
$xml = simplexml_load_file($request_url) or die("url not loading");
//print_r($xml);
$coords['lat']=$coords['lon']='';
$coords['status'] = $xml->status ;
if($coords['status']=='OK')
{
 $coords['lat'] = $xml->result->geometry->location->lat ;
 $coords['lon'] = $xml->result->geometry->location->lng ;
}
return $coords;
}
  
      
 public function ficheAction($id) {
  
     
     
      $societe = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->find($id);
        $liensociaux = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:SocialNetwork')->findOneBy(array('societe'=>$societe->getId()));
      $adresse=$societe->getAdresse();
            $ville = $societe->getVille();
            $address=$adresse.','.$ville;
            
    $coords=$this->getXmlCoordsFromAdress($address);      
         if($coords['status']=='OK')
             { $latitude=$coords['lat'];
               $longitude=$coords['lon'];
               }
               else {
                 $coords=$this->getXmlCoordsFromAdress($ville);   
               $latitude=$coords['lat'];
               $longitude=$coords['lon'];
                }
 
             
  return $this->render('BusinessAnnuaireBundle:Annuaire:fichesociete.html.twig',array(
      'societe'=>$societe,'longitude'=>$longitude,'latitude'=>$latitude,'liensociaux'=>$liensociaux));
              
                
 }     
  public function searchAction() {
      
       $request = $this->get('request');
      $motcle=$request->query->get('motcle');
      $local=$request->query->get('local');
      $j=0;
      if($motcle==NULL) {
      $listsociete =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->getCompanyByLocal($local);
      if($listsociete!=null)
      {
        $j=1;  
      }
      }
      else if($local==NULL) {
          $listsociete =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->getCompanyByCle($motcle);
      if($listsociete!=null)
      {
        $j=1;  
      }
          
      }
     else {
         $listsociete =$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->getCompanyBy($motcle,$local);
        if($listsociete!=null)
      {
        $j=1;  
      }
         
     } 
  return $this->render('BusinessAnnuaireBundle:Annuaire:search.html.twig',array(
      'listsocietes'=>$listsociete,'motcle'=> $motcle,'local'=>$local,'j'=>$j));
  }  
  
   public function specialiteAction(Request $request)
    {  
         
       if('POST' === $request->getMethod()) {
                
               $domaine=$request->request->get('domaine');
         
           $repository = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Specialite');  
    $specialite=$repository->findBy(array('domaine' =>$domaine));
     
     // $m=$request->request->get('cate');
 
}
return $this->render('BusinessAnnuaireBundle:Annuaire:listspecialite.html.twig',array('specialite'=>$specialite));  
    }
    
    
    public function listannoncesAction() {
        
        $categories = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Categorie')->findAll();
         $listannonces = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->getLatestRegister(5);    
      
      
      
        
      return $this->render('BusinessAnnuaireBundle:Annuaire:listannonces.html.twig',array('listannonces'=>$listannonces,'categories'=>$categories));
  }  
 
  public function ficheannonceAction($id) {
  
      $annonce = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->find($id);
      
   return $this->render('BusinessAnnuaireBundle:Annuaire:detailannonce.html.twig',array('annonce'=>$annonce));    
  }
  
  public function rechecheannonceAction() {
      
       $categories = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Categorie')->findAll();
       $request = $this->get('request');
       if('POST' === $request->getMethod()) {
               
       $listannonces = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->Getlistannonce($request->request->get('listsouscategoriesann'),$request->request->get('lieu'),$request->request->get('keyannrech'));
       
       return $this->render('BusinessAnnuaireBundle:Annuaire:listannonces.html.twig',array('listannonces'=>$listannonces,'categories'=>$categories));
  
       }
  }
  
  public function listpromotionsAction() {
      
      $listannonces = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->getLatestRegister(6);    
      
      return $this->render('BusinessAnnuaireBundle:Annuaire:listpromotions.html.twig',array('listpromotions'=>$listannonces));
  }  
 
  
  
  
  public function fichepromotionAction($id) {
  
      $annonce = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->find($id);
      
   return $this->render('BusinessAnnuaireBundle:Annuaire:detailpromotion.html.twig',array('promotion'=>$annonce));    
  }
  
   public function contactAction()
    {
         $em = $this->getDoctrine()->getManager();
       
       $entity = new Contact();
        $form   = $this->createForm(new ContactType(), $entity);
        $user = $this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->find(5);
          $request = $this->get('request');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request); 
       	if ($form->isValid()) {
              
               //$entity->redimensionner_image($entity->getUploadRootDir('maladies').'/'.$entity->getPath(), 1024, 768);
               $entity->setDestinataire($user);
               $entity->setDateenvoi(new \DateTime());
               
               $em->persist($entity);
               
               $em->flush();
               
         $message = \Swift_Message::newInstance()
        ->setSubject('Contact')
        ->setFrom(array($entity->getEmail()=>'ContactMessage'))
        ->setTo('chebelmahmoud@yahoo.fr')
        ->setBody($this->renderView(
         'BusinessAnnuaireBundle:Annuaire:contentmessage.html.twig',array('email'=>$entity->getEmail(),'nom'=>$entity->getNom(),'prenom'=>$entity->getPrenom(),'message'=>$entity->getMessage())),'text/html');
        $this->get('mailer')->send($message);
     $url = $this->get('router')->generate('annuaire_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
        }
           
    }
          return $this->render('BusinessAnnuaireBundle:Annuaire:contact.html.twig',array('form' => $form->createView()));
   
    }
    
    public function repondreannonceAction() {
        
          $request = $this->get('request');
             $em = $this->getDoctrine()->getManager();
          if ($request->getMethod() == 'POST') {
           $destinataire=$request->request->get('destinataire');
           $nom=$request->request->get('nom');
           $prenom=$request->request->get('prenom');
           $email=$request->request->get('email');
           $titre=$request->request->get('titre');
            $msg=$request->request->get('msg');
           $tel=$request->request->get('tel');
         
            $repannonce=new RepAnnonce();
           $repannonce->setNom($nom);
           $repannonce->setPrenom($prenom);
           $repannonce->setEmail($email);
           $repannonce->setTelephone($tel);
           $repannonce->setDatepublication(new \DateTime());
           $annonce=$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Annonce')->findOneBy(array('titre'=>$titre));
           $annonceur=$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->findOneBy(array('email'=>$destinataire));
           $repannonce->setAnnonce($annonce);
           $repannonce->setAnnonceur($annonceur);
           $repannonce->setMessage($msg);
            $em->persist($repannonce);
            $em->flush();
             $message = \Swift_Message::newInstance()
        ->setSubject('Reponse Annonce')
        ->setFrom(array($email=>'Replay Annonce'))
        ->setTo('chebelmahmoud@yahoo.fr')
        ->setBody($this->renderView(
         'BusinessAnnuaireBundle:Annuaire:reponsesannonces.html.twig',array('email'=>$email,'nom'=>$nom,'titre'=>$titre,'prenom'=>$prenom,'message'=>$msg)),'text/html');
        $this->get('mailer')->send($message);
     $url = $this->get('router')->generate('annuaire_listannonces');
                    $response = new RedirectResponse($url);
                    return $response; 
           
        }          
    }
    
    public function repondrepromotionAction() {
        
          $request = $this->get('request');
          $em = $this->getDoctrine()->getManager();
        
          if ($request->getMethod() == 'POST') {
           $destinataire=$request->request->get('destinataire');
           $nom=$request->request->get('nom');
           $prenom=$request->request->get('prenom');
           $email=$request->request->get('email');
           $titre=$request->request->get('titre');
           $msg=$request->request->get('msg');
          $tel=$request->request->get('tel');
         
           $reppromotion=new RepPromotion();
           $reppromotion->setNom($nom);
           $reppromotion->setPrenom($prenom);
           $reppromotion->setEmail($email);
           $reppromotion->setTelephone($tel);
           $reppromotion->setDatepublication(new \DateTime());
           $promotion=$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:Promotion')->findOneBy(array('titre'=>$titre));
           $reppromotion->setPromotion($promotion);
           $promoteur=$this->getDoctrine()->getRepository('BusinessAnnuaireBundle:User')->findOneBy(array('email'=>$destinataire));
           $reppromotion->setPromoteur($promoteur);
           $reppromotion->setMessage($msg);
            $em->persist($reppromotion);
            $em->flush();
         
           
             $message = \Swift_Message::newInstance()
        ->setSubject('Reponse Promotions')
        ->setFrom($email)
        ->setTo($destinataire)
        ->setBody($this->renderView(
         'BusinessAnnuaireBundle:Annuaire:reponsespromotions.html.twig',array('email'=>$email,'nom'=>$nom,'titre'=>$titre,'prenom'=>$prenom,'message'=>$msg)),'text/html');
        $this->get('mailer')->send($message);
     $url = $this->get('router')->generate('annuaire_listpromotions');
                    $response = new RedirectResponse($url);
                    return $response; 
           
        }          
    }
    public function contactsocieteAction() {
          $request = $this->get('request');
        if ($request->getMethod() == 'POST') {
           $destinataire=$request->request->get('destinataire');
           $nom=$request->request->get('nom');
           $prenom=$request->request->get('prenom');
           $email=$request->request->get('email');
       
           $msg=$request->request->get('msg');
           
             $message = \Swift_Message::newInstance()
        ->setSubject('Contact')
        ->setFrom($email)
        ->setTo($destinataire)
        ->setBody($this->renderView(
         'BusinessAnnuaireBundle:Annuaire:contentmessage.html.twig',array('email'=>$email,'nom'=>$nom,'prenom'=>$prenom,'message'=>$msg)),'text/html');
        $this->get('mailer')->send($message);
     $url = $this->get('router')->generate('annuaire_homepage');
                    $response = new RedirectResponse($url);
                    return $response; 
           
        }          
    }
        
    
}
