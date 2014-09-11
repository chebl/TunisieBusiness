<?php

/* BusinessAnnuaireBundle:Profil:socialnetwork.html.twig */
class __TwigTemplate_3b6543db4ba3a223aecbeb0f5b9d461877494df1b65873470b2ed0bc7d8da13e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        // line 3
        echo "<!--Form Validator-->
";
        // line 4
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "


";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "

<div class=\"grid_1\"> 

<div class=\"box-stand\">
<h4>R&eacute;seaux Sociaux</h4>
<div class=\"descbull\">
Liez vos pages vous repr&eacute;sentant sur les r&eacute;seaux sociaux afin que les visiteurs puissent aimer, partager ou vous suivre sur Facebook, Twitter, Google+, etc...
</div>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td>&nbsp;</td>
  </tr>
</table>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("annuaire_socialnetwork");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

<fieldset>
<br>
<label><span>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlfb"), 'label');
        echo "</span>
";
        // line 30
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlfb"), 'widget', array("attr" => array("id" => "fb", "name" => "fb")));
        echo "
</label>
<br>
<label><span>";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urltwitter"), 'label');
        echo "</span>
";
        // line 35
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urltwitter"), 'widget', array("attr" => array("id" => "twi", "name" => "twi")));
        echo "        

</label>
<br>
<label><span>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlyoutube"), 'label');
        echo "</span>
";
        // line 41
        echo "   ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlyoutube"), 'widget', array("attr" => array("id" => "yout", "name" => "yout")));
        echo "       
</label>
<br>
<label><span>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllinkedin"), 'label');
        echo "</span>
";
        // line 46
        echo "         ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urllinkedin"), 'widget', array("attr" => array("id" => "linkedin", "name" => "linkedin")));
        echo "  
</label>
<br>
<label><span>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlgoogleplus"), 'label');
        echo "</span>
";
        // line 51
        echo "     ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlgoogleplus"), 'widget', array("attr" => array("id" => "goog", "name" => "goog")));
        echo "  
</label>
<br>
<label><span>";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlsiteweb"), 'label');
        echo "</span>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "urlsiteweb"), 'widget', array("attr" => array("id" => "sitew", "name" => "sitew")));
        echo "
</label>
<div class=\"btns\"><input name=\"modifsoc\" id=\"submit\" type=\"submit\" value=\"Enregistrer\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>

<div class=\"clear\"></div>
</fieldset>
    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</div>\t<!--coordonnées Personnel-->

<div class=\"clear\"></div>

</div> <!--End include left-->

";
        // line 69
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 70
        echo "<div class=\"grid_2\">

<!--Pub right Annonceurs-->
<div class=\"box-stand\">
<div class=\"clear\"></div>
</div> <!--Annonceurs-->

</div> <!--FB like blocs-->

</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">



<div class=\"clear\"></div>
</div>



";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Profil:socialnetwork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 70,  151 => 69,  140 => 61,  131 => 55,  127 => 54,  120 => 51,  116 => 49,  109 => 46,  105 => 44,  98 => 41,  94 => 39,  86 => 35,  82 => 33,  75 => 30,  71 => 28,  62 => 24,  46 => 10,  43 => 9,  35 => 4,  32 => 3,  29 => 2,);
    }
}
