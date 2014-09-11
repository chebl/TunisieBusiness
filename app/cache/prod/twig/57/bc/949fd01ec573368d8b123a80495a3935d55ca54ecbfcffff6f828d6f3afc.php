<?php

/* BusinessAnnuaireBundle:Annuaire:register.html.twig */
class __TwigTemplate_57bc949fd01ec573368d8b123a80495a3935d55ca54ecbfcffff6f828d6f3afc extends Twig_Template
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

<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("annuaire_registerpage");
        echo "\" style=\"box-shadow: 2px 2px 10px #888888;\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">

<span style=\"color:#8c0101; text-transform:uppercase;font-weight: bold;font-size: 14px;\">Pas encore inscrit ?</span>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>Inscrivez-vous, confirmer votre inscription et profiter de nos services</td>
  </tr>
</table>
<fieldset>
<br>
<label><span style=\" float: left; \">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "</span>
";
        // line 33
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("class" => "validate[required]", "style" => "margin-left: 173px;", "id" => "nom")));
        echo "  
</label>
<br>
<label><span style=\" float: left; \">";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "</span>
";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("class" => "validate[required]", "style" => "margin-left: 152px;", "id" => "prenom")));
        echo " 
</label>
<br>
<label><span style=\" float: left; \">";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</span>
";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "validate[required,custom[email]]", "style" => "margin-left: 164px;", "id" => "email", "name" => "email")));
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
<label><span style=\" float: left; \">";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
        echo "</span>
";
        // line 55
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "validate[required,length[6,25]]", "style" => "margin-left: 115px;", "id" => "passwor")));
        echo " 

    </label>
<br>
<label><span style=\" float: left; \">";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
        echo "</span>
";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "validate[required,confirm[passwor],length[6,25]]", "style" => "margin-left: 22px;", "id" => "confirmpassword")));
        echo " 
        
</label>
<br>
<label><span style=\" float: left; \">Recopier le code de sécurité :</span>
<input class=\"validate[required]\" name=\"in_code\" type=\"text\" id=\"in_code\" size=\"12\" style=\" width: 128px; margin-left: 14px; \"> &nbsp;
    \t<img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/captcha/captcha_code_file7052.jpg?rand=2079080691"), "html", null, true);
        echo "\" id='captchaimg' />
</label>
<br>
<label>
<input name=\"certifier\" id=\"certifier\" type=\"checkbox\" class=\"validate[required]\" style=\"float: left;\"/><p style=\" margin-left: 22px; color: black; \">Je certifie que les donn&eacute;es ci-dessus sont exactess et r&eacute;elles</p>
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Inscription\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px;border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

</form>
</div><!--inscription société-->
</div>
<!--include right-->
<div class=\"grid_2\">
    

<!--Pub right Annonceurs-->
<div class=\"box-stand\">

    <div class=\"clear\"></div>
</div> <!--Annonceurs-->

<div class=\"box-pub\">
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Carée-->
<div class=\"box-pub2\">
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
<!-- Place this tag where you want the widget to render. -->
<div class=\"g-page\" data-width=\"250\" data-href=\"https://plus.google.com/105367995533699353729\" data-showtagline=\"false\" data-rel=\"publisher\"></div>

<!-- Place this tag after the last widget tag. -->
<script type=\"text/javascript\">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = '../apis.google.com/js/platform.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</div> <!--FB like blocs-->
<div class=\"box-pub2\">
\t\t\t\t<!-- Start photoslider-mini -->
\t\t\t\t<div class=\"sliderkit photoslider-maxi\" style=\"width:252px;height:600px;\">
\t\t\t\t\t<div class=\"sliderkit-panels\">
\t\t\t\t\t\t

\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t
                                                </div>
\t\t\t\t\t\t<div class=\"sliderkit-panel\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- // end of photoslider-mini -->
\t<div class=\"clear\"></div>
</div> <!--Bloc pub Large-->
</div> <!--End include right-->

<div class=\"clear\"></div> <!--Clear-->

</div>
</section>
       
<div class=\"line-2\"></div>\t<!--line-->
<div class=\"container_12\">

<div class=\"box-actualite fleft\">

</div> <!--Dérniers Promotions-->

<div class=\"box-actualite fright\">
</div> <!--Dérniers annonces-->

<div class=\"clear\"></div>

</div>

";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle:Annuaire:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 76,  160 => 67,  151 => 61,  147 => 59,  140 => 55,  136 => 53,  129 => 49,  125 => 47,  117 => 42,  113 => 40,  107 => 37,  103 => 36,  96 => 33,  92 => 31,  77 => 21,  71 => 17,  68 => 16,  60 => 11,  56 => 10,  52 => 9,  48 => 8,  44 => 7,  40 => 6,  36 => 5,  32 => 3,  29 => 2,);
    }
}
