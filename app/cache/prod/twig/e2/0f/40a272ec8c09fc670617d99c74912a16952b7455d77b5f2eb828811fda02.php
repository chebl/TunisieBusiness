<?php

/* BusinessAnnuaireBundle:Annuaire:dernierspromotions.html.twig */
class __TwigTemplate_e20f40a272ec8c09fc670617d99c74912a16952b7455d77b5f2eb828811fda02 extends Twig_Template
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
        return array (  77 => 22,  64 => 18,  54 => 15,  81 => 26,  72 => 23,  68 => 19,  58 => 17,  50 => 17,  35 => 12,  84 => 25,  75 => 22,  61 => 20,  43 => 13,  39 => 12,  34 => 11,  30 => 10,  121 => 63,  117 => 62,  104 => 52,  97 => 48,  93 => 47,  71 => 30,  55 => 20,  42 => 9,  27 => 7,  22 => 2,  19 => 1,  357 => 273,  354 => 272,  347 => 268,  340 => 173,  337 => 172,  308 => 243,  284 => 222,  269 => 210,  264 => 208,  260 => 207,  255 => 205,  248 => 201,  237 => 193,  233 => 192,  227 => 189,  223 => 188,  217 => 185,  213 => 184,  207 => 181,  203 => 180,  195 => 174,  193 => 172,  189 => 170,  186 => 169,  168 => 151,  148 => 134,  143 => 132,  133 => 124,  129 => 79,  126 => 78,  116 => 48,  112 => 47,  106 => 45,  101 => 39,  98 => 30,  91 => 17,  86 => 42,  82 => 14,  79 => 13,  76 => 12,  69 => 306,  67 => 21,  62 => 21,  59 => 268,  57 => 18,  51 => 165,  49 => 16,  46 => 13,  44 => 14,  40 => 10,  36 => 9,  25 => 1,  45 => 10,  41 => 9,  37 => 8,  31 => 8,  28 => 3,);
    }
}
