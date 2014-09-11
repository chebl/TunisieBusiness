<?php

/* BusinessAnnuaireBundle:Profil:sidebar.html.twig */
class __TwigTemplate_e6b766412d29caf6c5af0c949a81a45338418764958aa107044627a99055b16a extends Twig_Template
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
<h4><a href=\"monespace.html\">espace professionnel</a></h4>
";
        // line 5
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "typecompte") == "Pro")) {
            // line 6
            echo "<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Mon Espace</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 14
            echo $this->env->getExtension('routing')->getPath("annuaire_editpage");
            echo "\">Mes informations</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("annuaire_socialnetwork");
            echo "\">Réseaux Sociaux</a></td>
  </tr>
  
  <tr>
    <td><a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("annuaire_promotion");
            echo "\">Ajouter une promotion</a></td>
  </tr>
  
  <tr>
    <td><a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("annuaire_reppromotions");
            echo "\">Réponses sur mes promotions</a></td>
  </tr>
  
  
  <tr>
    <td><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Publier une annonce</a></td>
  </tr>
 <tr>
    <td><a href=\"";
            // line 33
            echo $this->env->getExtension('routing')->getPath("annuaire_repannonces");
            echo "\">Réponses sur mes annonces</a></td>
  </tr>
 
  <tr>
    <td><a href=\"reserver-pub.html\">Mes publicit&eacute;s</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a></td>
  </tr>
</table>
";
        } else {
            // line 44
            echo "

<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("annuaire_monespace");
            echo "\">Mon Espace</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("annuaire_mescoordonness");
            echo "\">Mes informations</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
            echo "\">Publier une annonce</a></td>
  </tr>
  <tr>
    <td><a href=\"reponse-sur-annonces.html\">Réponses sur mes annonces</a></td>
  </tr>
  <tr>
    <td><a href=\"reserver-pub.html\">Mes publicit&eacute;s</a></td>
  </tr>
  <tr>
    <td><a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a></td>
  </tr>
</table>
";
        }
        // line 70
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
        return array (  131 => 70,  124 => 66,  112 => 57,  106 => 54,  91 => 44,  84 => 40,  74 => 33,  68 => 30,  60 => 25,  53 => 21,  46 => 17,  40 => 14,  34 => 11,  27 => 6,  25 => 5,  19 => 1,  143 => 66,  141 => 65,  135 => 61,  128 => 44,  125 => 43,  115 => 39,  111 => 38,  107 => 37,  100 => 51,  96 => 35,  79 => 23,  75 => 22,  69 => 21,  63 => 20,  57 => 19,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
