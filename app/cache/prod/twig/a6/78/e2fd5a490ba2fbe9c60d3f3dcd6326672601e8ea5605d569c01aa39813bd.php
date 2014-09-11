<?php

/* BusinessAnnuaireBundle:Annuaire:detailpromotion.html.twig */
class __TwigTemplate_a678e2fd5a490ba2fbe9c60d3f3dcd6326672601e8ea5605d569c01aa39813bd extends Twig_Template
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
        echo "
<div class=\"grid_1\"> 
<div class=\"box-stand\">
<h4>Promotion</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png); border-bottom:solid 1px #000;\">
    <td colspan=\"3\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
        echo "</td>
    </tr>
  <tr>
    <td style=\"width:20%;\">Titre :</td>
    <td style=\"width:80%;\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
        echo "</td>
    <td rowspan=\"5\">
         ";
        // line 23
        if (($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "path") == "")) {
            echo " 
              
            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
            echo "\" rel=\"prefetch\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
            echo "\">
             <figure style=\"margin-right:10px;float: left;\"><img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
            echo "\" rel=\"prefetch\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "title"), "html", null, true);
            echo "\" style=\" width: 200px; height: 250px; \"></figure>   
              </a>
          ";
        } else {
            // line 29
            echo "             
              <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/promotions/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "path"), "html", null, true);
            echo "\" rel=\"prefetch\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
            echo "\">
        </a>   
             <figure style=\"margin-right:10px;float: left;\"><img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/promotions/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "path"), "html", null, true);
            echo "\" rel=\"prefetch\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
            echo "\" style=\" width: 200px; height: 250px; \"></figure>   
            
        ";
        }
        // line 35
        echo "               
            </td>
  </tr>
  <tr>
    <td>Publiée le :</td>
    <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "datepublication"), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Par :</td>
    <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "nom"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "prenom"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Téléphone :</td>
    <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "telephone"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>Description :</td>
    <td> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "description"), "html", null, true);
        echo "</td>
  </tr>
</table>



</div> <!--Annonce détails-->
<div class=\"box-stand\">
<h4>Réserver cette promotion</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>Vous pouvez réserver cette promotion à travers le formulaire suivant :</td>
  </tr>
</table>
\t<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("annuaire_repondre_promotion");
        echo "\" onsubmit=\"alert('Message Envoyé')\">
<fieldset>
<br>
<label><span style=\"float:left;\">Nom :</span>
<input class=\"validate[required]\" type=\"text\" name=\"nom\" id=\"nom\" style=\" margin-left: 138px; \"/>
</label>
<br>
<label><span style=\"float:left;\">Prénom :</span>
<input class=\"validate[required]\" type=\"text\" name=\"prenom\" id=\"prenom\" style=\" margin-left: 117px; \"/>
</label>
<br>
<label><span style=\"float:left;\">E-mail :</span>
<input class=\"validate[required,custom[email]]\" type=\"text\" name=\"email\" id=\"email\" style=\" margin-left: 129px; \"/>
</label>
<br>
<label><span style=\"float:left;\">Téléphone :</span>
<input class=\"validate[required]\" type=\"text\" name=\"tel\" id=\"tel\" style=\" margin-left: 99px; \"/>
</label>
<input type=\"hidden\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "promoteur"), "username"), "html", null, true);
        echo "\" name=\"destinataire\">
<input type=\"hidden\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
        echo "\" name=\"titre\">

<br>
<label><span style=\"float:left;\">Message :</span>
<textarea class=\"validate[required,length[10,500]]\" name=\"msg\" id=\"msg\" style=\" margin-left: 112px; \"></textarea>
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Envoyer\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
</fieldset>
</form>
</div> <!--Formulaire de reservation-->
<div class=\"clear\"></div>
<div class=\"box-stand\">
<div class=\"fb-like\" data-href=\"http://www.tunisie-business.net/annonce-erp-86.html\" data-colorscheme=\"light\" data-layout=\"button_count\" data-action=\"like\" data-show-faces=\"false\" data-send=\"false\"></div>
<div class=\"fb-share-button\" data-href=\"http://www.tunisie-business.net/annonce-erp-86.html\" data-type=\"button\" style=\" margin: -2px 20px 0px 20px; \"></div>
<a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://www.tunisie-business.net/annonce-erp-86.html\" data-via=\"TunisieBusiness\" data-lang=\"fr\">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</div>
<div style=\" margin-top: 10px; \">
<div class=\"fb-comments\" data-href=\"http://www.tunisie-business.net/annonce-erp-86.html\" data-colorscheme=\"light\" data-numposts=\"5\" data-width=\"600\"></div>
</div> <!--Button like & Shared Article-->
<div style=\"margin-top:2px;\">
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
 <!--Formulaire de reservation-->
<div class=\"clear\"></div>
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
        return "BusinessAnnuaireBundle:Annuaire:detailpromotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 85,  174 => 84,  153 => 66,  136 => 52,  129 => 48,  120 => 44,  113 => 40,  106 => 35,  97 => 32,  89 => 30,  86 => 29,  78 => 26,  72 => 25,  67 => 23,  62 => 21,  55 => 17,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
