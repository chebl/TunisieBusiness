<?php

/* BusinessAnnuaireBundle:Profil:listsouscategorie.html.twig */
class __TwigTemplate_b9eeecd91f7a1d6382c3e26ca0e463473f4f60ee0062e1f0c53d54d680c199be extends Twig_Template
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
        echo "<label><span>Sous Catégorie :</span>
<select name=\"listsouscategoriesann\" id=\"listsouscategoriesann\" class=\"validate[required]\"> 
                           ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["souscategorie"]) ? $context["souscategorie"] : $this->getContext($context, "souscategorie")));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 4
            echo "                                   <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cat"]) ? $context["cat"] : $this->getContext($context, "cat")), "nom"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "   
             </select>              
 \t\t\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:listsouscategorie.html.twig";
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
