<?php

/* SonataAdminBundle:Button:history_button.html.twig */
class __TwigTemplate_9163c60f7cf3a97d808ddca97afec79046c0b08a273a323ccad8edbb7df7e37c extends Twig_Template
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
        if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "history"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "id", array(0 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method")) && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "EDIT", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"))) {
            // line 13
            echo "    <a class=\"sonata-action-element\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "history", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">
        <i class=\"fa fa-archive\"></i>
        ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_action_history", array(), "SonataAdminBundle"), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Button:history_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,  778 => 251,  772 => 248,  769 => 247,  767 => 246,  763 => 244,  760 => 243,  748 => 242,  745 => 241,  742 => 240,  739 => 239,  736 => 238,  734 => 237,  729 => 235,  717 => 233,  714 => 232,  711 => 231,  703 => 226,  700 => 225,  683 => 223,  666 => 222,  661 => 220,  656 => 219,  653 => 218,  650 => 217,  644 => 213,  640 => 211,  638 => 210,  633 => 209,  616 => 207,  599 => 206,  595 => 205,  590 => 204,  587 => 203,  584 => 202,  581 => 201,  578 => 200,  576 => 199,  573 => 198,  564 => 193,  560 => 191,  558 => 190,  555 => 189,  553 => 188,  550 => 187,  546 => 166,  540 => 164,  534 => 162,  531 => 161,  528 => 160,  521 => 182,  515 => 180,  513 => 179,  510 => 178,  504 => 175,  501 => 174,  499 => 173,  496 => 172,  493 => 171,  475 => 169,  473 => 168,  470 => 167,  468 => 160,  459 => 159,  454 => 156,  448 => 153,  445 => 152,  442 => 151,  439 => 150,  433 => 149,  429 => 148,  422 => 147,  420 => 146,  417 => 145,  414 => 144,  411 => 143,  408 => 142,  405 => 141,  402 => 140,  399 => 139,  396 => 138,  393 => 137,  390 => 136,  380 => 130,  377 => 129,  374 => 128,  368 => 126,  366 => 125,  361 => 124,  358 => 123,  355 => 122,  351 => 120,  348 => 118,  345 => 116,  343 => 115,  340 => 114,  338 => 113,  324 => 110,  317 => 107,  307 => 104,  304 => 103,  298 => 101,  295 => 100,  291 => 99,  283 => 97,  281 => 96,  278 => 95,  272 => 91,  259 => 87,  252 => 85,  245 => 83,  232 => 78,  212 => 76,  200 => 70,  196 => 68,  169 => 62,  164 => 59,  161 => 57,  151 => 52,  135 => 51,  133 => 50,  130 => 49,  127 => 48,  124 => 47,  122 => 46,  107 => 41,  99 => 38,  96 => 37,  93 => 36,  84 => 32,  65 => 25,  58 => 21,  45 => 16,  42 => 15,  39 => 14,  318 => 145,  286 => 98,  274 => 129,  268 => 127,  265 => 126,  263 => 125,  260 => 124,  248 => 116,  242 => 82,  236 => 109,  230 => 106,  224 => 103,  219 => 101,  216 => 100,  203 => 93,  197 => 90,  192 => 88,  187 => 64,  185 => 63,  182 => 85,  176 => 82,  170 => 79,  165 => 77,  158 => 55,  153 => 72,  147 => 69,  144 => 68,  141 => 67,  138 => 61,  136 => 60,  132 => 59,  128 => 58,  123 => 57,  120 => 56,  80 => 41,  75 => 29,  72 => 37,  70 => 27,  67 => 32,  35 => 16,  330 => 112,  327 => 111,  321 => 109,  315 => 98,  312 => 143,  306 => 141,  303 => 140,  300 => 102,  292 => 135,  290 => 90,  287 => 89,  280 => 131,  275 => 86,  273 => 85,  270 => 84,  264 => 82,  262 => 88,  256 => 86,  253 => 78,  247 => 84,  243 => 73,  240 => 72,  237 => 79,  231 => 69,  225 => 67,  222 => 66,  220 => 65,  217 => 77,  214 => 99,  209 => 75,  206 => 74,  202 => 55,  194 => 52,  190 => 66,  184 => 48,  178 => 46,  175 => 45,  171 => 44,  168 => 43,  162 => 41,  160 => 76,  156 => 54,  150 => 34,  142 => 30,  137 => 29,  134 => 28,  129 => 25,  126 => 24,  119 => 45,  112 => 52,  105 => 61,  102 => 39,  100 => 57,  97 => 56,  95 => 28,  92 => 45,  87 => 33,  76 => 18,  73 => 28,  69 => 16,  62 => 29,  59 => 28,  55 => 20,  52 => 19,  46 => 21,  43 => 20,  41 => 6,  38 => 17,  36 => 4,  30 => 15,  24 => 13,  116 => 44,  113 => 43,  110 => 42,  104 => 40,  98 => 47,  94 => 30,  90 => 34,  86 => 43,  81 => 31,  78 => 30,  71 => 23,  68 => 26,  60 => 18,  54 => 25,  51 => 24,  48 => 14,  12 => 36,);
    }
}
