<?php

/* BusinessAnnuaireBundle:Annuaire:listspecialite.html.twig */
class __TwigTemplate_524da13cfd346184104708aa0a5bf754194321e1f842852c354870389298e934 extends Twig_Template
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
        echo "<label><span>Spécialité société :</span>
<select name=\"listspecialiteann\" id=\"scateg\" class=\"validate[required]\"> 
                           ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialite"]) ? $context["specialite"] : $this->getContext($context, "specialite")));
        foreach ($context['_seq'] as $context["_key"] => $context["spec"]) {
            // line 4
            echo "                                   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spec"]) ? $context["spec"] : $this->getContext($context, "spec")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["spec"]) ? $context["spec"] : $this->getContext($context, "spec")), "nom"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['spec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "   
             </select>              
 \t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:listspecialite.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
