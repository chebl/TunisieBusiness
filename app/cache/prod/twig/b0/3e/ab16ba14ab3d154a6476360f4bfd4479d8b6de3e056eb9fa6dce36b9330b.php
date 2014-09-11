<?php

/* BusinessAnnuaireBundle:Profil:mesreponsespromotions.html.twig */
class __TwigTemplate_b03eab16ba14ab3d154a6476360f4bfd4479d8b6de3e056eb9fa6dce36b9330b extends Twig_Template
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
<h4>RÉPONSES À VOS PROMOTIONS</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td style=\"width:30%;\">Reçu Le</td>
    <td style=\"width:30%;\">Par</td>
    <td style=\"width:30%;\">Message</td>
    
    <td style=\"width:30%;\">Details</td>
    
    <td style=\"width:10%;\">Supprimer</td>
  </tr>
  ";
        // line 24
        $context["i"] = 0;
        // line 25
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) ? $context["reponses"] : $this->getContext($context, "reponses")));
        foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
            // line 26
            echo "<tr><td style=\" width:40%;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "datepublication"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
    <td style=\" width:20%;\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "prenom"), "html", null, true);
            echo " </td>
    <td style=\" width:20%;\">";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "message"), "html", null, true);
            echo " </td>
    
    <td style=\" width:30%;text-align: center; \"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_detailsreppromotions", array("id" => $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "id"))), "html", null, true);
            echo "\"/>
        <img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/details.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\" /></a></td>
        <td style=\" width:10%;text-align: center; \"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_deleterepprom", array("id" => $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "id"))), "html", null, true);
            echo "\" class=\"ask\">
                <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/delete.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\"/></a></td>
";
            // line 34
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 35
            echo "</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
            // line 38
            echo "  <tr>
<td colspan=\"5\" style=\"background-color: rgb(252, 233, 233); background-position: initial initial; background-repeat: initial initial;\">
<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/error.png"), "html", null, true);
            echo "\" alt=\"error\"/>
Il n' y a aucun message pour le moment!!!
</td>
</tr> 
";
        }
        // line 45
        echo "</table>

</div> <!--liste annonces-->

";
        // line 62
        echo "<!--Espace Pro annonceur-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->
";
        // line 66
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 67
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
        return "BusinessAnnuaireBundle:Profil:mesreponsespromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  136 => 66,  130 => 62,  124 => 45,  116 => 40,  112 => 38,  110 => 37,  103 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  80 => 28,  74 => 27,  69 => 26,  64 => 25,  62 => 24,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
