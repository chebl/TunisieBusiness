<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_328d4762b1553d2170e5e88296a1d19ee0aad16828e30c81d630351a69f94c72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        $this->env->loadTemplate("FOSUserBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  182 => 87,  179 => 86,  176 => 85,  167 => 75,  155 => 68,  144 => 60,  130 => 49,  120 => 42,  114 => 39,  107 => 35,  101 => 33,  98 => 32,  94 => 30,  88 => 28,  85 => 27,  82 => 26,  76 => 80,  74 => 32,  71 => 31,  69 => 26,  61 => 21,  56 => 18,  53 => 17,  47 => 88,  45 => 85,  41 => 83,  39 => 17,  35 => 15,  32 => 14,);
    }
}
