<?php

/* SonataAdminBundle:Button:list_button.html.twig */
class __TwigTemplate_de001136f33fb158e88c8fd9894b0cfa3da8d039c2bbb15155b0227eb1d6f4a6 extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-list\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_list", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:list_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 15,  22 => 12,  19 => 11,  34 => 12,  24 => 13,  21 => 11,  127 => 52,  124 => 51,  116 => 48,  109 => 46,  103 => 44,  101 => 43,  98 => 42,  94 => 41,  90 => 39,  82 => 34,  77 => 31,  75 => 30,  72 => 29,  68 => 28,  63 => 26,  59 => 24,  56 => 23,  50 => 21,  44 => 18,  40 => 13,  36 => 16,  31 => 15,  28 => 13,);
    }
}
