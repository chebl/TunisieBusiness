<?php

/* SonataAdminBundle:CRUD:list_datetime.html.twig */
class __TwigTemplate_82fe516f37ed494a886d7e5427cdfb478ce2531d07e273bfde2736604c92ea78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        // line 15
        if (twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 16
            echo "&nbsp;";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "format", array(), "any", true, true)) {
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options"), "format")), "html", null, true);
        } else {
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list_datetime.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 20,  87 => 28,  81 => 20,  76 => 35,  73 => 34,  61 => 29,  56 => 28,  53 => 27,  51 => 26,  48 => 25,  45 => 24,  38 => 21,  32 => 19,  30 => 13,  24 => 12,  21 => 11,  36 => 20,  34 => 18,  31 => 16,  29 => 15,  26 => 14,  22 => 12,  19 => 11,  635 => 226,  624 => 224,  620 => 223,  612 => 220,  607 => 218,  601 => 216,  599 => 215,  594 => 212,  585 => 209,  580 => 207,  577 => 206,  574 => 205,  572 => 204,  566 => 203,  563 => 202,  559 => 201,  555 => 200,  551 => 199,  545 => 198,  536 => 194,  532 => 192,  529 => 191,  526 => 190,  523 => 189,  518 => 180,  514 => 167,  511 => 166,  507 => 165,  504 => 164,  501 => 163,  497 => 156,  493 => 155,  490 => 154,  485 => 124,  474 => 122,  470 => 121,  463 => 117,  459 => 116,  455 => 115,  450 => 114,  447 => 113,  424 => 91,  421 => 90,  415 => 127,  412 => 126,  410 => 113,  406 => 111,  404 => 90,  401 => 89,  398 => 88,  393 => 168,  391 => 163,  385 => 159,  381 => 157,  379 => 154,  376 => 153,  369 => 148,  359 => 144,  354 => 142,  351 => 141,  347 => 140,  340 => 136,  335 => 133,  333 => 132,  329 => 130,  326 => 129,  323 => 88,  320 => 87,  318 => 86,  313 => 84,  310 => 83,  307 => 82,  302 => 79,  287 => 77,  284 => 76,  281 => 75,  264 => 74,  261 => 73,  258 => 72,  252 => 68,  246 => 67,  243 => 66,  239 => 64,  235 => 63,  230 => 62,  224 => 61,  212 => 60,  210 => 59,  207 => 58,  204 => 57,  201 => 56,  198 => 55,  195 => 54,  192 => 53,  189 => 52,  186 => 51,  183 => 50,  180 => 49,  178 => 48,  175 => 47,  173 => 46,  169 => 44,  163 => 40,  160 => 39,  156 => 38,  152 => 36,  149 => 35,  144 => 26,  134 => 182,  131 => 181,  129 => 180,  126 => 179,  120 => 176,  117 => 175,  114 => 174,  110 => 172,  108 => 171,  105 => 170,  103 => 82,  100 => 81,  98 => 72,  95 => 71,  93 => 35,  90 => 34,  85 => 32,  80 => 31,  77 => 30,  74 => 29,  72 => 28,  69 => 27,  67 => 32,  62 => 24,  58 => 22,  55 => 21,  49 => 18,  42 => 23,  39 => 18,);
    }
}
