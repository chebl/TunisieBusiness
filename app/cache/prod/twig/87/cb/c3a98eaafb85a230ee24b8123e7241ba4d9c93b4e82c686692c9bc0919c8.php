<?php

/* BusinessAnnuaireBundle:Profil:monespace.html.twig */
class __TwigTemplate_87cbc3a98eaafb85a230ee24b8123e7241ba4d9c93b4e82c686692c9bc0919c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "<!--Form Validator-->
";
        // line 4
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "

";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"grid_1\"> 

<div class=\"box-stand espace_pro\">
<h4>Administration</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td colspan=\"4\">G&Egrave;RER MA PAGE (Veuillez cliquer sur un des icones ci-dessous)</td>
  </tr>
</table>
<div style=\" margin-top: 15px; margin-left: 28px; \">
<div style=\"float:left;\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("annuaire_editpage");
        echo "\" title=\"Modifier les coordonnées affichées sur votre page, adresse, téléphone, personne de contact, etc\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/mes_informations.png"), "html", null, true);
        echo "\" alt=\"Modifier les coordonnées affichées sur votre page, adresse, téléphone, personne de contact, etc\" /></a></div>
<div style=\"float:left;\"><a target=\"_blank\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichesociete", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "id"))), "html", null, true);
        echo "\" title=\"Visualiser votre page\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/apercu_page.png"), "html", null, true);
        echo "\" alt=\"Société tunisie\" /></a></div>
<div style=\"float:left;\"><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("annuaire_mespromotions");
        echo "\" title=\"Poster une promotion supplémentaire dans la rubrique promo / Deals\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/mes_promotions.png"), "html", null, true);
        echo "\" alt=\"Promotions Tunisie\" /></a></div>
<div style=\"float:left;\"><a href=\"\" title=\"D&eacute;poser une petite annonce gratuite\"><img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/petite_annonce.png"), "html", null, true);
        echo "\" alt=\"Mes annonces\" /></a></div>
<div><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("annuaire_socialnetwork");
        echo "\" title=\"Enter les url de vos pages sur Facebook, twitter ou autres afin que les visiteurs puissent vous suivre\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/reseaux_sociaux.png"), "html", null, true);
        echo "\" alt=\"Réseaux sociaux\" /></a></div>
</div>
</div>
    <div class=\"box-stand\">
<h4>Mes Annonces</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td style=\"width:80%;\">Titre</td>
    <td style=\"width:10%;\">Modifier</td>
    <td style=\"width:10%;\">Supprimer</td>
  </tr>
  
  ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mesannonces"]) ? $context["mesannonces"] : $this->getContext($context, "mesannonces")));
        foreach ($context['_seq'] as $context["_key"] => $context["annonce"]) {
            // line 36
            echo "<tr><td style=\" width:80%;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
            echo "</td><td style=\" width:10%;text-align: center; \"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_editannonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\"/>
        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/edit.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\" /></a></td>
        <td style=\" width:10%;text-align: center; \"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_deleteannonce", array("id" => $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "id"))), "html", null, true);
            echo "\" class=\"ask\">
                <img src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/delete.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\"/></a></td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annonce'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "</table>
 <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("annuaire_ajoutannonce");
        echo "\"><input name=\"retour\" type=\"button\" class=\"button_es_pro marg5\" value=\"D&eacute;poser une Annonce\" style=\" width: 180px; float: right; \"/></a>
 
</div> <!--liste annonces-->

";
        // line 61
        echo "<!--Espace Pro annonceur-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->
";
        // line 65
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 66
        echo "<div class=\"grid_2\">

<!--Pub right Annonceurs-->
<div class=\"box-stand\">
<div class=\"clear\"></div>
</div> <!--Annonceurs-->

</div> <!--FB like blocs-->

</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">



<div class=\"clear\"></div>
</div>



";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:monespace.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 66,  141 => 65,  135 => 61,  128 => 44,  125 => 43,  115 => 39,  111 => 38,  107 => 37,  100 => 36,  96 => 35,  79 => 23,  75 => 22,  69 => 21,  63 => 20,  57 => 19,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
