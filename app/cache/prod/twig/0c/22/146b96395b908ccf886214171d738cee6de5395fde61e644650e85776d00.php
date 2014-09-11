<?php

/* BusinessAnnuaireBundle:Profil:mescoordonnes.html.twig */
class __TwigTemplate_0c22146b96395b908ccf886214171d738cee6de5395fde61e644650e85776d00 extends Twig_Template
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

<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/formValidator/css/validationEngine.jquery.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" title=\"no title\">
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/formValidator/css/template.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\" title=\"no title\">
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/msgBox/Styles/msgBoxLight.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"><!--MsgBox-->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/autocomplete/themes/base/jquery.ui.all.css"), "html", null, true);
        echo "\"><!--autocomplite-->
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/lib/css/sliderkit-core.css"), "html", null, true);
        echo "\" media=\"screen, projection\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/lib/css/sliderkit-demos.css"), "html", null, true);
        echo "\" media=\"screen, projection\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/lib/css/sliderkit-site.css"), "html", null, true);
        echo "\" media=\"screen, projection\" />\t<!--slider kit css-->


";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<div class=\"grid_1\"> 
<div class=\"box-stand\">
<h4>Coordonnées Personnelle</h4>
<table class=\"tabsuiv\" style=\"width:100%;\">
<tbody>
<tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);border-bottom: 1px solid #000;\">
<td>Modifier Coordonnées Personnelle</td>
</tr>
</tbody>
</table>
<form id=\"pro_form1\" action=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("annuaire_mescoordonness");
        echo "\" style=\"box-shadow: 2px 2px 10px #888888;\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
<fieldset>
<br>
<label>
<span style=\" float: left; \">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "</span>
";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "nom", "style" => "margin-left: 173px;")));
        echo "  
</label>
<br>
<label>
<span style=\" float: left; \">";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "</span>
";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "prenom", "style" => "margin-left: 152px;")));
        echo " 
</label>
<br>
<label>
<span style=\" float: left; \">";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</span>
";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "validate[required,custom[email]]", "id" => "email", "name" => "email", "style" => "margin-left: 164px;")));
        echo " 
</label>
<br>

<label><span style=\" float: left; \">";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label');
        echo "</span>
";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("class" => "validate[required]", "style" => "margin-left: 130px;", "id" => "tel", "name" => "tel")));
        echo " 

</label>
<br>
<label>
<span style=\" float: left; \">";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
        echo "</span>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "validate[required,length[6,25]]", "id" => "passwor", "style" => "margin-left: 115px;")));
        echo " 

</label>
<label>
<span style=\" float: left; \">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
        echo "</span>
";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "validate[required,confirm[passwor],length[6,25]]", "id" => "confirmpassword", "style" => "margin-left: 22px;")));
        echo " 

</label>
<div class=\"btns\">
<input id=\"submit\" type=\"submit\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" value=\"Modifier\" name=\"modifpas\">
<div class=\"clear\"></div>
</div>
<div class=\"clear\"></div>
</fieldset>
        ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

</form>
</div>
        <div class=\"box-stand\">

    
<!--Pub right Annonceurs-->

</div>
      
<div class=\"clear\"></div><div class=\"clear\"></div>
</div>

";
        // line 83
        $this->env->loadTemplate("BusinessAnnuaireBundle:Profil:sidebar.html.twig")->display($context);
        // line 84
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
        return "BusinessAnnuaireBundle:Profil:mescoordonnes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 84,  181 => 83,  164 => 69,  152 => 60,  148 => 59,  141 => 55,  137 => 54,  129 => 49,  125 => 47,  118 => 43,  114 => 42,  107 => 38,  103 => 37,  96 => 33,  92 => 31,  83 => 27,  71 => 17,  68 => 16,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
