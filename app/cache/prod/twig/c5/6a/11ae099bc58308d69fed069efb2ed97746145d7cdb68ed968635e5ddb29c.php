<?php

/* BusinessAnnuaireBundle:Profil:login.html.twig */
class __TwigTemplate_c56a11ae099bc58308d69fed069efb2ed97746145d7cdb68ed968635e5ddb29c extends Twig_Template
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
<a title=\"Mes messages reçus | TunisieBusiness\" href=\"mes-messages-recu.html\">Message récu</a>
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
        return array (  121 => 63,  117 => 62,  104 => 52,  97 => 48,  93 => 47,  71 => 30,  55 => 20,  42 => 9,  27 => 5,  22 => 2,  19 => 1,  357 => 273,  354 => 272,  347 => 268,  340 => 173,  337 => 172,  308 => 243,  284 => 222,  269 => 210,  264 => 208,  260 => 207,  255 => 205,  248 => 201,  237 => 193,  233 => 192,  227 => 189,  223 => 188,  217 => 185,  213 => 184,  207 => 181,  203 => 180,  195 => 174,  193 => 172,  189 => 170,  186 => 169,  168 => 151,  148 => 134,  143 => 132,  133 => 124,  129 => 79,  126 => 78,  116 => 48,  112 => 47,  106 => 45,  101 => 39,  98 => 30,  91 => 17,  86 => 42,  82 => 14,  79 => 13,  76 => 12,  69 => 306,  67 => 272,  62 => 24,  59 => 268,  57 => 169,  51 => 165,  49 => 30,  46 => 29,  44 => 12,  40 => 11,  36 => 8,  25 => 1,  138 => 103,  124 => 92,  37 => 8,  31 => 6,  28 => 3,);
    }
}
