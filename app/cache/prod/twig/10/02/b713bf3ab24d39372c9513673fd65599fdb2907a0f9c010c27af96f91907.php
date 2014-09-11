<?php

/* BusinessAnnuaireBundle:Annuaire:reponsespromotions.html.twig */
class __TwigTemplate_1002b713bf3ab24d39372c9513673fd65599fdb2907a0f9c010c27af96f91907 extends Twig_Template
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
        echo "<div class=\"box-stand\">

<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr>
    <td>Titre du promotion :</td>
    <td>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        echo "</td>
  </tr>

    <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td colspan=\"3\">Message From User</td>
    </tr>
  
    <tr>
    <td style=\"width:20%;\">Nom :</td>
    <td style=\"width:80%;\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo "</td>
    <td rowspan=\"5\">
               
            </td>
  </tr>
  
  <tr>
    <td>Prenom :</td>
    <td>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Email :</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Message :</td>
    <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</td>
  </tr>
  
</table>



</div>";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:reponsespromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 31,  56 => 27,  49 => 23,  38 => 15,  26 => 6,  19 => 1,);
    }
}
