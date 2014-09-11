<?php

/* BusinessAnnuaireBundle:Profil:sidebar.html.twig */
class __TwigTemplate_7804e51e0097115d86b19c796209b6225426261a1e80d0f58b152f943e0bee7d extends Twig_Template
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
        echo "<div class=\"grid_2\">
<div class=\"box-stand\">
<div class=\"wrap \">
";
        // line 4
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "typecompte") == "Pro")) {
            // line 5
            echo "    <h4><a href=\"";
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Espace Professionnel</a></h4>

<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Mon Espace</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 15
            echo $this->env->getExtension('routing')->getPath("annuaire_editpage");
            echo "\">Mes informations</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("annuaire_socialnetwork");
            echo "\">Réseaux Sociaux</a></td>
  </tr>
  
  <tr>
    <td><a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("annuaire_promotion");
            echo "\">Ajouter une promotion</a></td>
  </tr>
  
  <tr>
    <td><a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("annuaire_reppromotions");
            echo "\">Réponses sur mes promotions</a></td>
  </tr>
  
  
  <tr>
    <td><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Publier une annonce</a></td>
  </tr>
 <tr>
    <td><a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("annuaire_repannonces");
            echo "\">Réponses sur mes annonces</a></td>
  </tr>
 
  <tr>
    <td><a href=\"";
            // line 38
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a></td>
  </tr>
</table>
";
        } else {
            // line 42
            echo "<h4><a href=\"";
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Espace Particulier</a></h4>


<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Mon Espace</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("annuaire_mescoordonness");
            echo "\">Mes informations</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Publier une annonce</a></td>
  </tr>
  <tr>
  <td><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("annuaire_repannonces");
            echo "\">Réponses sur mes annonces</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a></td>
  </tr>
</table>
";
        }
        // line 66
        echo "</div>
<div class=\"clear\"></div>
</div> <!--menu pro--><!--Pub right Annonceurs-->
<div class=\"box-stand\">

    
<!--Pub right Annonceurs-->

</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">

 <!--Dérniers Promotions-->


<div class=\"clear\"></div>


</div>";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 66,  127 => 62,  121 => 59,  115 => 56,  109 => 53,  103 => 50,  91 => 42,  84 => 38,  77 => 34,  71 => 31,  63 => 26,  56 => 22,  49 => 18,  43 => 15,  37 => 12,  26 => 5,  24 => 4,  19 => 1,);
    }
}
