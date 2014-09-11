<?php

/* SonataUserBundle:Admin/Core:user_block.html.twig */
class __TwigTemplate_4c08b5b84b35802ee9eeb1f0e6f741217641f9c05de4db3aadf968b34a4be107 extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 3
            echo "
        ";
            // line 4
            $context["_bg_class"] = "bg-light-blue";
            // line 5
            echo "        ";
            $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl("sonata_user_admin_security_logout");
            // line 6
            echo "        ";
            $context["_logout_text"] = $this->env->getExtension('translator')->trans("user_block_logout", array(), "SonataUserBundle");
            // line 7
            echo "        ";
            $context["_user_image"] = $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "defaultAvatar"));
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            // line 10
            echo "
        ";
            // line 11
            if (($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN") && $this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"))) {
                // line 12
                echo "            ";
                $context["_bg_class"] = "bg-light-green";
                // line 13
                echo "            ";
                $context["_logout_uri"] = $this->env->getExtension('routing')->getUrl($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "route"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["sonata_user"]) ? $context["sonata_user"] : $this->getContext($context, "sonata_user")), "impersonating"), "parameters"), array("_switch_user" => "_exit")));
                // line 14
                echo "            ";
                $context["_logout_text"] = "(exit)";
                // line 15
                echo "        ";
            }
            // line 16
            echo "
        <li class=\"user-header ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["_bg_class"]) ? $context["_bg_class"] : $this->getContext($context, "_bg_class")), "html", null, true);
            echo "\">
            ";
            // line 18
            if ((isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image"))) {
                // line 19
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, (isset($context["_user_image"]) ? $context["_user_image"] : $this->getContext($context, "_user_image")), "html", null, true);
                echo "\" class=\"img-circle\" alt=\"Avatar\" />
            ";
            }
            // line 21
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "html", null, true);
            echo "</p>
        </li>

";
            // line 30
            echo "
        <li class=\"user-footer\">
";
            // line 38
            echo "
            <div class=\"pull-right\">
                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["_logout_uri"]) ? $context["_logout_uri"] : $this->getContext($context, "_logout_uri")), "html", null, true);
            echo "\" class=\"btn btn-default btn-flat\"><i class=\"fa fa-sign-out fa-fw\"></i> ";
            echo twig_escape_filter($this->env, (isset($context["_logout_text"]) ? $context["_logout_text"] : $this->getContext($context, "_logout_text")), "html", null, true);
            echo "</a>
            </div>
        </li>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin/Core:user_block.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  79 => 21,  67 => 17,  61 => 15,  47 => 10,  40 => 7,  217 => 56,  203 => 55,  200 => 54,  196 => 52,  193 => 51,  188 => 48,  186 => 47,  183 => 46,  179 => 44,  177 => 43,  174 => 42,  160 => 38,  154 => 36,  146 => 34,  143 => 33,  132 => 28,  126 => 26,  124 => 25,  121 => 24,  118 => 23,  108 => 21,  102 => 19,  96 => 18,  87 => 14,  80 => 13,  71 => 18,  68 => 10,  51 => 9,  48 => 8,  36 => 6,  32 => 4,  27 => 13,  25 => 12,  20 => 1,  175 => 74,  168 => 41,  156 => 64,  152 => 62,  150 => 35,  141 => 58,  138 => 57,  134 => 55,  123 => 52,  109 => 46,  105 => 20,  101 => 42,  99 => 41,  93 => 17,  90 => 38,  88 => 37,  74 => 30,  70 => 29,  62 => 24,  58 => 14,  56 => 21,  53 => 20,  46 => 19,  43 => 8,  37 => 6,  29 => 3,  26 => 2,  194 => 66,  189 => 63,  185 => 61,  176 => 58,  171 => 57,  167 => 56,  164 => 55,  162 => 68,  157 => 37,  148 => 49,  144 => 59,  136 => 30,  133 => 46,  129 => 27,  120 => 51,  116 => 50,  113 => 40,  111 => 22,  107 => 37,  98 => 35,  94 => 40,  86 => 30,  83 => 32,  81 => 33,  77 => 12,  73 => 19,  64 => 16,  59 => 23,  55 => 13,  52 => 12,  50 => 11,  45 => 9,  42 => 7,  39 => 16,  34 => 5,  28 => 14,);
    }
}
