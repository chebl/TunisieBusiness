<?php

/* BusinessAnnuaireBundle:Annuaire:derniersinscriptions.html.twig */
class __TwigTemplate_e804a517f68e35ffd0c8f2a8e9a81a14b704da06dd941a508b4b9db3b907e8c5 extends Twig_Template
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
<h4>Dernières inscriptions</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>Soci&eacute;t&eacute;</td>
    <td>Adresse</td>
    <td>Domaine d'activit&eacute;</td>
  </tr>

  ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listsocietes"]) ? $context["listsocietes"] : $this->getContext($context, "listsocietes")));
        foreach ($context['_seq'] as $context["_key"] => $context["soc"]) {
            // line 11
            echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichesociete", array("id" => $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "id"))), "html", null, true);
            echo "\" title=\"\">
           ";
            // line 12
            if (($this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "path") == "")) {
                echo " 
              <img itemprop=\"image\" src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>
          ";
            } else {
                // line 16
                echo "              <img itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/logos/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "path"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>      
                 ";
            }
            // line 18
            echo " 
              </td><td style=\"width: 60%;\">
            <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichesociete", array("id" => $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "id"))), "html", null, true);
            echo "\" title=\"\"><strong itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "nomsociete"), "html", null, true);
            echo "</strong>
                <br>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "adresse"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "codepostal"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "ville"), "html", null, true);
            echo "<br>T&eacute;l&eacute;phone : </a></td>   
<td style=\"width: 30%;\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["soc"]) ? $context["soc"] : $this->getContext($context, "soc")), "specialite"), "html", null, true);
            echo "</td>
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['soc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
    </table>
</div> ";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:derniersinscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  75 => 22,  61 => 20,  43 => 13,  39 => 12,  34 => 11,  30 => 10,  121 => 63,  117 => 62,  104 => 52,  97 => 48,  93 => 47,  71 => 30,  55 => 20,  42 => 9,  27 => 5,  22 => 2,  19 => 1,  357 => 273,  354 => 272,  347 => 268,  340 => 173,  337 => 172,  308 => 243,  284 => 222,  269 => 210,  264 => 208,  260 => 207,  255 => 205,  248 => 201,  237 => 193,  233 => 192,  227 => 189,  223 => 188,  217 => 185,  213 => 184,  207 => 181,  203 => 180,  195 => 174,  193 => 172,  189 => 170,  186 => 169,  168 => 151,  148 => 134,  143 => 132,  133 => 124,  129 => 79,  126 => 78,  116 => 48,  112 => 47,  106 => 45,  101 => 39,  98 => 30,  91 => 17,  86 => 42,  82 => 14,  79 => 13,  76 => 12,  69 => 306,  67 => 21,  62 => 24,  59 => 268,  57 => 18,  51 => 165,  49 => 16,  46 => 29,  44 => 12,  40 => 11,  36 => 8,  25 => 1,  45 => 10,  41 => 9,  37 => 8,  31 => 6,  28 => 3,);
    }
}
