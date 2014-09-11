<?php

/* SonataAdminBundle:Block:block_admin_list.html.twig */
class __TwigTemplate_770e183f07bac11231319cef2fbc1d100ff29deb760861ded12622c3f69874fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate($this->getAttribute($this->getAttribute((isset($context["sonata_block"]) ? $context["sonata_block"] : $this->getContext($context, "sonata_block")), "templates"), "block_base"));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_block($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 16
            echo "        ";
            $context["display"] = (twig_test_empty($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles")) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
            // line 17
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "roles"));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                if ((!(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")))) {
                    // line 18
                    echo "            ";
                    $context["display"] = $this->env->getExtension('security')->isGranted((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")));
                    // line 19
                    echo "        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "
        ";
            // line 21
            if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                // line 22
                echo "            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label"), array(), $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "label_catalogue")), "html", null, true);
                echo "</h3>
                </div>
                <div class=\"box-body\">
                    <table class=\"table table-hover\">
                        <tbody>
                            ";
                // line 29
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "items"));
                foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                    // line 30
                    echo "                                ";
                    if ((($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method")) || ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method")))) {
                        // line 31
                        echo "                                            <tr>
                                                <td class=\"sonata-ba-list-label\" width=\"40%\">
                                                    ";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "label"), array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain")), "html", null, true);
                        echo "
                                                </td>
                                                <td>
                                                    <div class=\"btn-group\">
                                                        ";
                        // line 37
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "CREATE"), "method"))) {
                            // line 38
                            echo "                                                            ";
                            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses"))) {
                                // line 39
                                echo "                                                                <a class=\"btn btn-link btn-flat\" href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                                echo "\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 41
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 42
                                echo "                                                                </a>
                                                            ";
                            } else {
                                // line 44
                                echo "                                                                <a class=\"btn btn-link btn-flat dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                                    <i class=\"fa fa-plus-circle\"></i>
                                                                    ";
                                // line 46
                                echo $this->env->getExtension('translator')->getTranslator()->trans("link_add", array(), "SonataAdminBundle");
                                // line 47
                                echo "                                                                    <span class=\"caret\"></span>
                                                                </a>
                                                                <ul class=\"dropdown-menu\">
                                                                    ";
                                // line 50
                                $context['_parent'] = (array) $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses")));
                                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                                    // line 51
                                    echo "                                                                        <li>
                                                                            <a href=\"";
                                    // line 52
                                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")))), "method"), "html", null, true);
                                    echo "\">";
                                    echo twig_escape_filter($this->env, (isset($context["subclass"]) ? $context["subclass"] : $this->getContext($context, "subclass")), "html", null, true);
                                    echo "</a>
                                                                        </li>
                                                                    ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 55
                                echo "                                                                </ul>
                                                            ";
                            }
                            // line 57
                            echo "                                                        ";
                        }
                        // line 58
                        echo "                                                        ";
                        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasroute", array(0 => "list"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "isGranted", array(0 => "LIST"), "method"))) {
                            // line 59
                            echo "                                                            <a class=\"btn btn-link btn-flat\" href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\">
                                                                <i class=\"glyphicon glyphicon-list\"></i>
                                                                ";
                            // line 61
                            echo $this->env->getExtension('translator')->getTranslator()->trans("link_list", array(), "SonataAdminBundle");
                            // line 62
                            echo "</a>
                                                        ";
                        }
                        // line 64
                        echo "                                                    </div>
                                                </td>
                                            </tr>
                                ";
                    }
                    // line 68
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                        </tbody>
                    </table>
                </div>
            </div>
        ";
            }
            // line 74
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:Block:block_admin_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 74,  168 => 69,  156 => 64,  152 => 62,  150 => 61,  138 => 57,  134 => 55,  109 => 46,  105 => 44,  101 => 42,  99 => 41,  93 => 39,  90 => 38,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 22,  56 => 21,  46 => 19,  37 => 17,  29 => 15,  26 => 14,  956 => 271,  953 => 270,  950 => 269,  946 => 302,  942 => 300,  936 => 297,  933 => 296,  931 => 295,  925 => 292,  917 => 291,  914 => 290,  912 => 289,  909 => 288,  903 => 286,  901 => 285,  898 => 284,  892 => 282,  890 => 281,  887 => 280,  881 => 278,  879 => 277,  876 => 276,  870 => 274,  868 => 273,  865 => 272,  863 => 269,  860 => 268,  857 => 267,  853 => 261,  848 => 258,  840 => 253,  834 => 249,  832 => 248,  828 => 246,  822 => 244,  820 => 243,  816 => 241,  810 => 238,  807 => 237,  805 => 236,  802 => 235,  799 => 234,  796 => 233,  791 => 262,  788 => 233,  785 => 232,  780 => 303,  778 => 267,  773 => 264,  771 => 232,  768 => 231,  765 => 230,  760 => 222,  757 => 221,  753 => 220,  749 => 218,  743 => 217,  738 => 214,  732 => 213,  720 => 211,  717 => 210,  713 => 209,  707 => 208,  700 => 205,  696 => 204,  688 => 202,  682 => 201,  679 => 200,  676 => 199,  673 => 198,  668 => 197,  665 => 196,  663 => 195,  660 => 194,  657 => 193,  650 => 192,  647 => 191,  644 => 190,  641 => 189,  635 => 188,  632 => 187,  629 => 186,  626 => 184,  619 => 183,  616 => 182,  610 => 181,  607 => 180,  603 => 179,  600 => 178,  597 => 177,  594 => 176,  588 => 175,  584 => 173,  570 => 164,  564 => 162,  561 => 161,  558 => 160,  554 => 224,  551 => 221,  548 => 176,  546 => 175,  543 => 174,  540 => 160,  537 => 159,  531 => 225,  529 => 159,  525 => 157,  522 => 156,  515 => 305,  513 => 230,  509 => 228,  507 => 156,  504 => 155,  501 => 154,  493 => 143,  490 => 142,  482 => 136,  479 => 135,  471 => 129,  468 => 128,  464 => 125,  460 => 123,  454 => 121,  451 => 120,  448 => 119,  434 => 118,  428 => 116,  424 => 114,  418 => 112,  410 => 110,  408 => 109,  405 => 108,  402 => 107,  384 => 106,  381 => 105,  379 => 104,  376 => 103,  373 => 102,  370 => 101,  366 => 150,  362 => 148,  360 => 128,  356 => 126,  354 => 101,  343 => 92,  340 => 91,  337 => 90,  332 => 88,  326 => 86,  323 => 85,  320 => 84,  311 => 83,  309 => 82,  304 => 81,  301 => 80,  296 => 151,  293 => 90,  291 => 80,  288 => 79,  285 => 78,  279 => 77,  274 => 53,  265 => 51,  261 => 50,  254 => 46,  250 => 44,  244 => 43,  236 => 42,  228 => 41,  224 => 39,  221 => 38,  216 => 35,  207 => 33,  203 => 32,  200 => 31,  197 => 30,  191 => 26,  188 => 25,  182 => 23,  174 => 154,  169 => 78,  165 => 77,  161 => 75,  158 => 74,  155 => 73,  141 => 58,  126 => 66,  123 => 52,  106 => 64,  103 => 63,  100 => 62,  92 => 59,  87 => 57,  78 => 37,  76 => 30,  71 => 25,  66 => 23,  63 => 22,  61 => 21,  57 => 19,  53 => 20,  51 => 16,  49 => 15,  47 => 14,  43 => 18,  41 => 11,  194 => 66,  189 => 63,  185 => 61,  176 => 309,  171 => 153,  167 => 56,  164 => 55,  162 => 68,  157 => 51,  148 => 49,  144 => 59,  136 => 70,  133 => 69,  129 => 67,  120 => 51,  116 => 50,  113 => 40,  111 => 47,  107 => 37,  98 => 35,  94 => 60,  86 => 33,  83 => 55,  81 => 33,  77 => 31,  73 => 29,  64 => 24,  59 => 20,  55 => 18,  52 => 21,  50 => 20,  45 => 13,  42 => 17,  39 => 16,  34 => 16,  28 => 14,);
    }
}
