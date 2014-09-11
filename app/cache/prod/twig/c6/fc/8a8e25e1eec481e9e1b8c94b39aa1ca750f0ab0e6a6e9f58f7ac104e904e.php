<?php

/* BusinessAnnuaireBundle:Profil:mesreponsesannonces.html.twig */
class __TwigTemplate_c6fc8a8e25e1eec481e9e1b8c94b39aa1ca750f0ab0e6a6e9f58f7ac104e904e extends Twig_Template
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
<h4>RÉPONSES À VOS ANNONCES</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td style=\"width:30%;\">Reçu Le</td>
    <td style=\"width:30%;\">Par</td>
    <td style=\"width:30%;\">Message</td>
    
    <td style=\"width:30%;\">Details</td>
    
    <td style=\"width:10%;\">Supprimer</td>
  </tr>
  
  ";
        // line 25
        $context["i"] = 0;
        // line 26
        echo "  
  ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) ? $context["reponses"] : $this->getContext($context, "reponses")));
        foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
            // line 28
            echo "<tr><td style=\" width:40%;\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "datepublication"), "d/m/Y H:i:s"), "html", null, true);
            echo "</td>
    <td style=\" width:20%;\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "nom"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "prenom"), "html", null, true);
            echo " </td>
    <td style=\" width:20%;\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "message"), "html", null, true);
            echo " </td>
    
    <td style=\" width:30%;text-align: center; \"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_detailsrepannonces", array("id" => $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "id"))), "html", null, true);
            echo "\"/>
        <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/details.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\" /></a></td>
        <td style=\" width:10%;text-align: center; \"><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_deleterepannonces", array("id" => $this->getAttribute((isset($context["rep"]) ? $context["rep"] : $this->getContext($context, "rep")), "id"))), "html", null, true);
            echo "\" class=\"ask\">
                <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/delete.png"), "html", null, true);
            echo "\" style=\"width:24; height:24px;\"/></a></td>
";
            // line 36
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 37
            echo "</tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
            // line 40
            echo "  <tr>
<td colspan=\"5\" style=\"background-color: rgb(252, 233, 233); background-position: initial initial; background-repeat: initial initial;\">
<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/error.png"), "html", null, true);
            echo "\" alt=\"error\"/>
Il n' y a aucun message pour le moment!!!
</td>
</tr> 
";
        }
        // line 47
        echo "</table>

</div> <!--liste annonces-->

";
        // line 64
        echo "<!--Espace Pro annonceur-->
<div class=\"clear\"></div>
<div class=\"clear\"></div><div class=\"clear\"></div>
</div> <!--End include left-->
";
        // line 68
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 69
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
        return "BusinessAnnuaireBundle:Profil:mesreponsesannonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  139 => 68,  133 => 64,  127 => 47,  119 => 42,  115 => 40,  113 => 39,  106 => 37,  104 => 36,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  83 => 30,  77 => 29,  72 => 28,  68 => 27,  65 => 26,  63 => 25,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
