<?php

/* BusinessAnnuaireBundle:Annuaire:dernierspromotions.html.twig */
class __TwigTemplate_5f05e30d615e18f64ee0c6cd16aac1d3c530df9febab7ba53826989701e8ff64 extends Twig_Template
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

    <h4>Dernières Promotions</h4>
<table style=\"width:100%;\" class=\"tabsoc\">


  ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listpromotions"]) ? $context["listpromotions"] : $this->getContext($context, "listpromotions")));
        foreach ($context['_seq'] as $context["_key"] => $context["prom"]) {
            // line 8
            echo "  <tr><td style=\"width: 10%;\"> <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichepromotion", array("id" => $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "id"))), "html", null, true);
            echo "\" title=\"\">
           ";
            // line 9
            if (($this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "path") == "")) {
                echo " 
              <img itemprop=\"image\" src=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>
          ";
            } else {
                // line 13
                echo "              <img itemprop=\"image\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/promotions/images/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "path"), "html", null, true);
                echo "\" alt=\"\" style=\"width:120px; height:60px;\" />
        </a>      
                 ";
            }
            // line 15
            echo " 
              </td><td style=\"width: 60%;\">
            <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("annuaire_fichepromotion", array("id" => $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "id"))), "html", null, true);
            echo "\" title=\"\"><strong itemprop=\"name\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "titre"), "html", null, true);
            echo "</strong></a>
                <br>publier le : ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "datepublication"), "d/m/Y"), "html", null, true);
            echo "
                <br>Par : ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["prom"]) ? $context["prom"] : $this->getContext($context, "prom")), "promoteur"), "nomsociete"), "html", null, true);
            echo "              </td>   
 </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    
    </table>
    
</div> ";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:dernierspromotions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 22,  64 => 18,  54 => 15,  46 => 13,  36 => 9,  27 => 7,  81 => 26,  72 => 23,  68 => 19,  62 => 21,  58 => 17,  50 => 17,  44 => 14,  40 => 10,  35 => 12,  19 => 1,  45 => 10,  41 => 9,  37 => 8,  31 => 8,  28 => 3,);
    }
}
