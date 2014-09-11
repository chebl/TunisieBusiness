<?php

/* BusinessAnnuaireBundle:Annuaire:contact.html.twig */
class __TwigTemplate_104d9b0045500581ffa2cf9de23ff6aa4e43cd91ebb8fbaaf49d648c4f2981bd extends Twig_Template
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
        // line 5
        $this->displayParentBlock("javascript", $context, $blocks);
        echo "


";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"grid_1\"> 
<div class=\"box-stand\">
<h4>Contact</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr>
    <td>Pour nous contacter veuillez remplire le formulaire suivant :</td>
  </tr>
</table>
<div style=\" width: 230px; height: 279px; border: 1px solid #d2d1d1; border-radius: 5px; margin-left: 350px; margin-top: 51px; position: absolute; background: white;\">
<table>
  <tr>
    <td colspan=\"2\">&nbsp;</td>
  </tr>
  <tr>
    <td colspan=\"2\"><strong style=\" font-size: 20px;margin-left: 10px;\">Tunisie Business</strong></td>
  </tr>
  <tr>
    <td colspan=\"2\">&nbsp;</td>
  </tr>
  <tr>
    <td colspan=\"2\"><samp style=\"margin-left: 12px;\">Imm. Yassmin, B26</samp></td>
    </tr>
  <tr>
    <td colspan=\"2\"><samp style=\"margin-left: 12px;\">Route de Tunis</samp></td>
    </tr>
  <tr>
    <td colspan=\"2\"><samp style=\"margin-left: 12px;\">4011 Hammam-Sousse</samp></td>
    </tr>
  <tr>
    <td><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/contact_icon_mail.png"), "html", null, true);
        echo "\" alt=\"email_tunisie_buss\" style=\"width:48px; height:48px;\"/></td>
    <td style=\" vertical-align: bottom; \">Contact@tunisie-business.net</td>
  </tr>
  <tr>
    <td><img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/contact_icon_tel.png"), "html", null, true);
        echo "\" alt=\"email_tunisie_buss\" style=\"width:48px; height:48px;\"/></td>
    <td style=\" vertical-align: bottom; \">(+216) 50 428 722</td>
  </tr>
  <tr>
    <td><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/contact_icon_fax.png"), "html", null, true);
        echo "\" alt=\"email_tunisie_buss\" style=\"width:48px; height:48px;\"/></td>
    <td style=\" vertical-align: bottom; \">(+216) 73 370 600</td>
  </tr>
</table>

</div>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("annuaire_contact");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo "  onsubmit=\"alert('Message envoyé !')\" >
<fieldset>
<br>
<label><span>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'label');
        echo "</span>
";
        // line 59
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom"), 'widget', array("attr" => array("id" => "nom", "class" => "validate[required]", "name" => "nom")));
        echo "     
</label>
<br>
<label><span>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'label');
        echo "</span>
";
        // line 64
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom"), 'widget', array("attr" => array("id" => "prenom", "class" => "validate[required]", "name" => "prenom")));
        echo "        

</label>
<br>
<label><span>";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</span>
";
        // line 70
        echo "  ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("id" => "email", "class" => "validate[required,custom[email]]", "name" => "email")));
        echo "        
      
</label>
<br>
<label><span>";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label');
        echo "</span>
";
        // line 76
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("id" => "tel", "class" => "validate[custom[telephone]]", "name" => "tel")));
        echo "        
         

</label>
<br>
<label><span>";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'label');
        echo "</span>
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'widget', array("attr" => array("id" => "msg", "class" => "validate[required,length[15,500]]", "name" => "msg", "style" => "width:547px;")));
        echo "        
               

</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Envoyer\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
</form>
</div> <!--FORM-->
\t<div class=\"box-stand\">
<script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- Annonce 468 x 60 -->
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width: 590px;height: 60px;border: solid 1px #000;\"
     data-ad-client=\"ca-pub-2668523252332800\"
     data-ad-slot=\"7232924170\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>\t<!--Adsens-->
</div> <!--End include left-->
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
        return "BusinessAnnuaireBundle:Annuaire:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 90,  161 => 83,  157 => 81,  148 => 76,  144 => 74,  136 => 70,  132 => 68,  124 => 64,  120 => 62,  113 => 59,  109 => 57,  101 => 54,  92 => 48,  85 => 44,  78 => 40,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
