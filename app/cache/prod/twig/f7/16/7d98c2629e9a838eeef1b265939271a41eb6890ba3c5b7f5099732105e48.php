<?php

/* BusinessAnnuaireBundle:Profil:login.html.twig */
class __TwigTemplate_f7167d98c2629e9a838eeef1b265939271a41eb6890ba3c5b7f5099732105e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 2
            echo "
<div id=\"loginContainer\">
\t\t        <a href=\"#\" id=\"loginButton\" title=\"cr&eacute;r une compte tunisie business\"><span style=\"min-width: 80px;\">
      ";
            // line 5
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "typecompte") == "Pro")) {
                echo "                          
       ";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nomsociete"), "html", null, true);
                echo "
       ";
            } else {
                // line 8
                echo "         ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "nom"), "html", null, true);
                echo "                                
       ";
            }
            // line 9
            echo "                                 
                                    </span><em></em></a>
        <div style=\"clear:both\"></div>
        <div id=\"loginBox\">           
            
   <ul id=\"loginForm\">
       
           <fieldset id=\"body\">


    <li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
    <a title=\"mon espace pro tunisie business\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("annuaire_mescoordonness");
            echo "\">Mon Compte</a>
   
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Ajouter une annonce | TunisieBusiness\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Ajouter annonce</a>
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Mes messages reçus | TunisieBusiness\" href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("annuaire_repannonces");
            echo "\">Message récu</a>
</li>
<li style=\"font-size: 18px; border: 1px solid; border-radius: 4px; text-align: center;\">
<a title=\"Déconnexion | TunisieBusiness\" href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
</li>
</fieldset>
           
           
           
</ul>
        </div>
</div>


";
        } else {
            // line 42
            echo " <div id=\"loginContainer\">
\t\t        <a href=\"#\" id=\"loginButton\" title=\"cr&eacute;r une compte tunisie business\"><span style=\"min-width: 80px;\">
        Connexion</span><em></em></a>
        <div style=\"clear:both\"></div>
        <div id=\"loginBox\">           
            <form id=\"loginForm\"  action=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
            echo "\" method=\"post\">
\t      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\" />
                    <fieldset id=\"body\">
                        <fieldset>
                            <label for=\"email\">Email</label>
                            <input type=\"text\" name=\"_username\" id=\"email\" class=\"validate[required,custom[email]]\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
            echo "\"/>
                        </fieldset>
                        <fieldset>
                            <label for=\"password\">Mot de Passe</label>
                            <input type=\"password\" name=\"_password\" id=\"password\" class=\"validate[required]\"/>
                        </fieldset>
                        <fieldset>
                                                </fieldset> 
                        <input type=\"submit\" name=\"login\" id=\"login\" value=\"Connexion\" />
                    </fieldset>
                        <span><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("annuaire_registerpage");
            echo "\" title=\"\">Cr&eacute;er un compte personnel  </a></span>
                        <span><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("annuaire_registercompanypage");
            echo "\" title=\"\">Cr&eacute;er un compte société</a></span>
                   
             </form>\t<!--Formulaire inscription-->
        \t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 63,  120 => 62,  107 => 52,  100 => 48,  96 => 47,  89 => 42,  74 => 30,  68 => 27,  62 => 24,  55 => 20,  42 => 9,  36 => 8,  31 => 6,  27 => 5,  22 => 2,  19 => 1,);
    }
}
