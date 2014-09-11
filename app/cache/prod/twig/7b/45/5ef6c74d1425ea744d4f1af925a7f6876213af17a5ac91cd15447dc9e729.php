<?php

/* BusinessAnnuaireBundle:Profil:detailreponsepromotion.html.twig */
class __TwigTemplate_7b455ef6c74d1425ea744d4f1af925a7f6876213af17a5ac91cd15447dc9e729 extends Twig_Template
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

<h4>Détails Promotions</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td colspan=\"2\">&nbsp;</td>
  </tr>
   <tr style=\" border-bottom: 1px solid black;\">
    <td>Promotion :</td>
     <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "promotion"), "titre"), "html", null, true);
        echo "</td>  </tr>
   <tr style=\" border-bottom: 1px solid black;\">
    <td>Reçu le :</td>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "datepublication"), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
  </tr>
   <tr style=\" border-bottom: 1px solid black;\">
    <td>De la part :</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "nom"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "prenom"), "html", null, true);
        echo "</td>
  </tr>
   <tr style=\" border-bottom: 1px solid black;\">
    <td>Téléphone :</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "telephone"), "html", null, true);
        echo "</td>
  </tr>
   <tr style=\" border-bottom: 1px solid black;\">
     <td style=\"width:20%;\">Message :</td>
    <td style=\"width:80%;\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reponse"]) ? $context["reponse"] : $this->getContext($context, "reponse")), "message"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td colspan=\"2\"><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("annuaire_reppromotions");
        echo "\"><input name=\"retour\" type=\"submit\" value=\"Retour\" class=\"button_rech\" style=\" float:right;\"/>
      </a></td>
  </tr>
</table>


</div> <!--Détails Message Vu-->

<div class=\"clear\"></div>

 <!--End include left-->

 <!--liste annonces-->

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
        echo "
";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:detailreponsepromotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 69,  115 => 68,  109 => 64,  92 => 37,  86 => 34,  79 => 30,  70 => 26,  63 => 22,  57 => 19,  45 => 9,  42 => 8,  35 => 4,  32 => 3,  29 => 2,);
    }
}
