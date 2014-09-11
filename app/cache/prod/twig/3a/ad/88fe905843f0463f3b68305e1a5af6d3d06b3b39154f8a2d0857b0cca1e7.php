<?php

/* BusinessAnnuaireBundle:Annuaire:detailannonce.html.twig */
class __TwigTemplate_3aad88fe905843f0463f3b68305e1a5af6d3d06b3b39154f8a2d0857b0cca1e7 extends Twig_Template
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
<h4>Détails Annonces</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);border-bottom: 1px solid #000;\">
    <td colspan=\"2\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
        echo "</td>
    <td></td>
  </tr>
  <tr>
    <td style=\"width:150px;\"><strong style=\"color:#000;\">Titre :</strong></td>
    <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
        echo "</td>
    <td rowspan=\"5\">
         ";
        // line 24
        if (($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "path") == "")) {
            echo " 
              
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
            echo "\" rel=\"prefetch\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "titre"), "html", null, true);
            echo "\">
             <figure style=\"margin-right:10px;float: left;\"><img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
            echo "\" rel=\"prefetch\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["promotion"]) ? $context["promotion"] : $this->getContext($context, "promotion")), "title"), "html", null, true);
            echo "\" style=\" width: 200px; height: 250px; \"></figure>   
              </a>
          ";
        } else {
            // line 30
            echo "             
              <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/annonces/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "path"), "html", null, true);
            echo "\" rel=\"prefetch\"  title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
            echo "\">
        </a>   
            <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/annonces/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "path"), "html", null, true);
            echo "\" rel=\"prefetch\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
            echo "\" style=\" width: 180px; height: 220px; \">  
            
        ";
        }
        // line 36
        echo "               
            </td>
  </tr>
  <tr>
    <td><strong style=\"color:#000;\">Publiée le :</strong></td>
    <td>";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "datepublication"), "d/m/Y H:i:s"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td><strong style=\"color:#000;\">Par :</strong></td>
    <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceur"), "username"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td><strong style=\"color:#000;\">Téléphone :</strong></td>
    <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceur"), "telephone"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td><strong style=\"color:#000;\">Région :</strong></td>
    <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "lieu"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td><strong style=\"color:#000;\">Description :</strong></td>
    <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "description"), "html", null, true);
        echo " </td>
    <td></td>
  </tr>
  <tr>
    <td><strong style=\"color:#F70B0B;\">Prix :</strong></td>
    <td style=\"color:#F70B0B;\">";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "prix"), "html", null, true);
        echo "</td>
    <td></td>
  
  </tr>
</table>
</div> <!--Annonce détails-->
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
<div class=\"box-stand\">
<h4>Répondre à cette annonce</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>Vous pouvez répondre à cette annonce à travers le formulaire suivant :</td>
  </tr>
</table>
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 95
        echo $this->env->getExtension('routing')->getPath("annuaire_repondre_annonce");
        echo "\" onsubmit=\"alert('Message Envoyé')\">
<fieldset>
<br />
<label><span style=\" float: left; \">Nom :</span>
<input class=\"validate[required]\" type=\"text\" name=\"nom\" id=\"nom\" style=\" margin-left: 70px; \"/>
</label>
<br />
<label><span style=\" float: left; \">Prénom :</span>
<input class=\"validate[required]\" type=\"text\" name=\"prenom\" id=\"prenom\" style=\" margin-left: 48px; \"/>
</label>
<br />
<label><span style=\" float: left; \">E-mail :</span>
<input class=\"validate[required,custom[email]]\" type=\"text\" name=\"email\" id=\"email\" style=\" margin-left: 60px; \"/>
</label>
<input type=\"hidden\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "annonceur"), "username"), "html", null, true);
        echo "\" name=\"destinataire\">
<input type=\"hidden\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annonce"]) ? $context["annonce"] : $this->getContext($context, "annonce")), "titre"), "html", null, true);
        echo "\" name=\"titre\">


<br />
<label><span style=\" float: left; \">Téléphone :</span>
<input class=\"validate[required]\" type=\"text\" name=\"tel\" id=\"tel\" style=\" margin-left: 30px; \"/>
</label>
<br />
<label><span style=\" float: left; \">Message :</span>
<textarea class=\"validate[required,length[10,500]]\" name=\"msg\" id=\"msg\" style=\" margin-left: 41px; \"></textarea>
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Envoyer\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
</fieldset>
</form>
</div> <!--Formulaire de reservation-->
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
        return "BusinessAnnuaireBundle:Annuaire:detailannonce.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 110,  203 => 109,  186 => 95,  150 => 62,  142 => 57,  135 => 53,  128 => 49,  121 => 45,  114 => 41,  107 => 36,  98 => 33,  90 => 31,  87 => 30,  79 => 27,  73 => 26,  68 => 24,  63 => 22,  55 => 17,  47 => 11,  44 => 10,  36 => 5,  32 => 3,  29 => 2,);
    }
}
