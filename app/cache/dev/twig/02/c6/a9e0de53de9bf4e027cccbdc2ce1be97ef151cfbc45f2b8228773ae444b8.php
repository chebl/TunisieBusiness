<?php

/* SonataCoreBundle:FlashMessage:render.html.twig */
class __TwigTemplate_02c6a9e0de53de9bf4e027cccbdc2ce1be97ef151cfbc45f2b8228773ae444b8 extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessagesTypes());
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 12
            echo "    ";
            $context["domain"] = ((array_key_exists("domain", $context)) ? ((isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))) : (null));
            // line 13
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->env->getExtension('sonata_core_flashmessage')->getFlashMessages((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), (isset($context["domain"]) ? $context["domain"] : $this->getContext($context, "domain"))));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                echo "        <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $this->env->getExtension('sonata_core_status')->statusClass((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type"))), "html", null, true);
                echo " alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
            ";
                // line 16
                echo (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"));
                echo "
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataCoreBundle:FlashMessage:render.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 14,  23 => 12,  19 => 11,  79 => 21,  67 => 17,  61 => 15,  47 => 10,  40 => 7,  217 => 56,  203 => 55,  200 => 54,  196 => 52,  193 => 51,  188 => 48,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  174 => 42,  160 => 38,  154 => 36,  146 => 34,  143 => 33,  132 => 28,  126 => 26,  124 => 25,  121 => 24,  118 => 23,  108 => 21,  102 => 19,  96 => 18,  87 => 14,  80 => 13,  71 => 18,  68 => 10,  51 => 9,  48 => 8,  36 => 6,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 41,  156 => 64,  152 => 62,  150 => 35,  141 => 58,  138 => 57,  134 => 55,  123 => 52,  109 => 46,  105 => 20,  101 => 42,  99 => 41,  93 => 17,  90 => 38,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 14,  56 => 21,  53 => 20,  46 => 19,  43 => 8,  37 => 16,  29 => 3,  26 => 13,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 68,  157 => 37,  148 => 49,  144 => 59,  136 => 30,  133 => 46,  129 => 27,  120 => 51,  116 => 50,  113 => 40,  111 => 22,  107 => 37,  98 => 35,  94 => 40,  86 => 30,  83 => 32,  81 => 33,  77 => 12,  73 => 19,  64 => 16,  59 => 23,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 7,  39 => 16,  34 => 5,  28 => 14,);
    }
}
