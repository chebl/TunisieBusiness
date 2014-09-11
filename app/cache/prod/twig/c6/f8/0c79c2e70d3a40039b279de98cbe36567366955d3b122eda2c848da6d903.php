<?php

/* SonataAdminBundle:Core:add_block.html.twig */
class __TwigTemplate_c6f80c79c2e70d3a40039b279de98cbe36567366955d3b122eda2c848da6d903 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_block' => array($this, 'block_user_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_block', $context, $blocks);
    }

    public function block_user_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        $context["itemsPerColumn"] = $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "dropdown_number_groups_per_colums"), "method");
        // line 3
        echo "    ";
        $context["columnsCount"] = twig_round((twig_length_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups")) / (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))));
        // line 4
        echo "

    <ul class=\"dropdown-menu";
        // line 6
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo " multi-column";
        }
        echo " dropdown-add\"
        ";
        // line 7
        if (((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1)) {
            echo "style=\"width: ";
            echo twig_escape_filter($this->env, ((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) * 140), "html", null, true);
            echo "px;\"";
        }
        // line 8
        echo "            >
        ";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "            ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 11
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 12
                    echo "                ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 13
                    echo "            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "
            ";
            // line 16
            echo "            ";
            $context["item_count"] = 0;
            // line 17
            echo "            ";
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 18
                echo "                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                        // line 19
                        echo "                    ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 20
                            echo "                        ";
                            $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                            // line 21
                            echo "                    ";
                        }
                        // line 22
                        echo "                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "            ";
            }
            // line 24
            echo "
            ";
            // line 25
            if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                // line 26
                echo "                ";
                if ((((isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")) > 1) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index0") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 27
                    echo "                    ";
                    if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "first")) {
                        // line 28
                        echo "                        <div class=\"row\">
                    ";
                    }
                    // line 30
                    echo "                    <div class=\"col-md-";
                    echo twig_escape_filter($this->env, twig_round((12 / (isset($context["columnsCount"]) ? $context["columnsCount"] : $this->getContext($context, "columnsCount")))), "html", null, true);
                    echo "\">
                    <ul class=\"dropdown-menu\">
                ";
                }
                // line 33
                echo "
                <li role=\"presentation\" class=\"dropdown-header\">";
                // line 34
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</li>
                ";
                // line 35
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 36
                    echo "                    ";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                        // line 37
                        echo "                        <li role=\"presentation\">
                            <a role=\"menuitem\" tabindex=\"-1\" href=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "
                ";
                // line 43
                if (((!$this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last")) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) != 0))) {
                    // line 44
                    echo "                    <li role=\"presentation\" class=\"divider\"></li>
                ";
                }
                // line 46
                echo "
            ";
                // line 47
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") % (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) == 0))) {
                    // line 48
                    echo "                </ul>
                </div>
            ";
                }
                // line 51
                echo "                ";
                if ((($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "length") > (isset($context["itemsPerColumn"]) ? $context["itemsPerColumn"] : $this->getContext($context, "itemsPerColumn"))) && $this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "last"))) {
                    // line 52
                    echo "                    </div>
                ";
                }
                // line 54
                echo "            ";
            }
            // line 55
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Core:add_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  217 => 56,  196 => 52,  193 => 51,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  160 => 38,  154 => 36,  146 => 34,  143 => 33,  132 => 28,  124 => 25,  121 => 24,  118 => 23,  108 => 21,  102 => 19,  96 => 18,  80 => 13,  68 => 10,  48 => 8,  36 => 6,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 41,  156 => 64,  152 => 62,  150 => 35,  138 => 57,  134 => 55,  109 => 46,  105 => 20,  101 => 42,  99 => 41,  93 => 17,  90 => 16,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 22,  56 => 21,  46 => 19,  37 => 17,  29 => 3,  26 => 2,  956 => 271,  953 => 270,  950 => 269,  946 => 302,  942 => 300,  936 => 297,  933 => 296,  931 => 295,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  903 => 286,  901 => 285,  898 => 284,  892 => 282,  890 => 281,  887 => 280,  881 => 278,  879 => 277,  876 => 276,  870 => 274,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  857 => 267,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  828 => 246,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  796 => 233,  791 => 262,  788 => 233,  785 => 232,  780 => 303,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  753 => 220,  749 => 218,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  707 => 208,  700 => 205,  696 => 204,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  635 => 188,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  529 => 159,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  507 => 156,  504 => 155,  501 => 154,  493 => 143,  490 => 142,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  424 => 114,  418 => 112,  410 => 110,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  337 => 90,  332 => 88,  326 => 86,  323 => 85,  320 => 84,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 55,  200 => 54,  197 => 30,  191 => 26,  188 => 48,  182 => 23,  174 => 42,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 58,  126 => 26,  123 => 52,  106 => 64,  103 => 63,  100 => 62,  92 => 59,  87 => 14,  78 => 37,  76 => 30,  71 => 11,  66 => 23,  63 => 22,  61 => 21,  57 => 19,  53 => 20,  51 => 9,  49 => 15,  47 => 14,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 309,  171 => 153,  167 => 56,  164 => 55,  162 => 68,  157 => 37,  148 => 49,  144 => 59,  136 => 30,  133 => 69,  129 => 27,  120 => 51,  116 => 50,  113 => 40,  111 => 22,  107 => 37,  98 => 35,  94 => 60,  86 => 33,  83 => 55,  81 => 33,  77 => 12,  73 => 29,  64 => 24,  59 => 20,  55 => 18,  52 => 21,  50 => 20,  45 => 13,  42 => 7,  39 => 16,  34 => 16,  28 => 14,);
    }
}
