<?php

/* BusinessAnnuaireBundle:Profil:mespromotions.html.twig */
class __TwigTemplate_461da269936db674092213cb1faba6fd419d4b7185079098e76a56f8a653a2bb extends Twig_Template
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


    <div class=\"box-stand\">
<h4>Mes Promotions</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td style=\"width:80%;\">Titre</td>
    <td style=\"width:10%;\">Modifier</td>
    <td style=\"width:10%;\">Supprimer</td>
  </tr>
  
  ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mespromotions"]) ? $context["mespromotions"] : $this->getContext($context, "mespromotions")));
        foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
            // line 22
            echo "<tr><td style=\" width:80%;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
            echo "</td><td style=\" width:10%;text-align: center; \"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_promotion", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), "html", null, true);
            echo "\"/>
        <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/edit.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\" /></a></td>
        <td style=\" width:10%;text-align: center; \"><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_deletepromotion", array("id" => $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "id"))), "html", null, true);
            echo "\" class=\"ask\">
                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/delete.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\"/></a></td>

</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</table>
 <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("annuaire_promotion");
        echo "\"><input name=\"retour\" type=\"button\" class=\"button_es_pro marg5\" value=\"D&eacute;poser une Promotion\" style=\" width: 180px; float: right; \"/></a>
 
</div> <!--liste annonces-->

<!--Espace Pro annonceur-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->
";
        // line 38
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 39
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
        return "BusinessAnnuaireBundle:Profil:mespromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 39,  102 => 38,  91 => 30,  88 => 29,  78 => 25,  74 => 24,  70 => 23,  63 => 22,  59 => 21,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
