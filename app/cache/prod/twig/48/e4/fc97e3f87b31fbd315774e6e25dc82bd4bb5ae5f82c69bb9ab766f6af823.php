<?php

/* BusinessAnnuaireBundle:Annuaire:fichesociete.html.twig */
class __TwigTemplate_48e4fc97e3f87b31fbd315774e6e25dc82bd4bb5ae5f82c69bb9ab766f6af823 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("BusinessAnnuaireBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "



<div class=\"grid_1\"> 
<div class=\"box-stand vcard\">
<h4>Fiche de société :</h4>
<table style=\"width:100%;\" class=\"tabsuiv\">
  <tr style=\" border-bottom: 1px solid #000; \">
      ";
        // line 16
        echo "      
    <td colspan=\"5\">Secteur ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "specialite"), "domaine"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td style=\" width: 30%; \"><h8>Nom de la société :</h8></td>
    <td class=\"fn org\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "nomsociete"), "html", null, true);
        echo "</td>
    <td>&nbsp;</td>
    <td rowspan=\"2\">
        ";
        // line 24
        if (($this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "path") == "")) {
            echo " 
                 <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/logosoc/no-image.gif"), "html", null, true);
            echo "\" alt=\"MHDINFO\" style=\"float:right;box-shadow: 3px 3px 2px 0px; height:90px; width:180px;\" />
          ";
        } else {
            // line 27
            echo "              <img itemprop=\"image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/uploads/logos/images/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "path"), "html", null, true);
            echo "\" alt=\"\" style=\"float:right;box-shadow: 3px 3px 2px 0px; height:90px; width:180px;\" />
        ";
        }
        // line 29
        echo "        </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h8>Sp&eacute;cialit&eacute; g&eacute;n&eacute;rale :</h8></td>
    <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "specialite"), "html", null, true);
        echo "</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><h8>Description :</h8></td>
    <td colspan=\"3\"> ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "description"), "html", null, true);
        echo "</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
      
           
    <td rowspan=\"2\"><h8>Suivez-la société sur :</h8></td>
    <td colspan=\"3\" rowspan=\"2\"><ul class=\"sharing-cl\" id=\"texto\">
            ";
        // line 48
        if ((!(null === (isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux"))))) {
            // line 49
            echo "\t\t      <li><a class=\"sh-mail\"href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urlfb"), "html", null, true);
            echo "\" target=\"_blank\" >Facebook</a></li>
      <li><a class=\"sh-feed\"href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urlyoutube"), "html", null, true);
            echo "\" target=\"_blank\" >You tube</a></li>
      <li><a class=\"sh-tweet\"href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urltwitter"), "html", null, true);
            echo "\" target=\"_blank\" >Twitter</a></li>
      <li><a class=\"sh-face\"href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urlsiteweb"), "html", null, true);
            echo "\" target=\"_blank\" >Site web</a></li>
      <li><a class=\"sh-su\"href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urllinkedin"), "html", null, true);
            echo "\" target=\"_blank\" >LinkdIn</a></li>
      <li><a class=\"sh-digg\"href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["liensociaux"]) ? $context["liensociaux"] : $this->getContext($context, "liensociaux")), "urlgoogleplus"), "html", null, true);
            echo "\" target=\"_blank\" >Google+</a></li>
       ";
        } else {
            // line 56
            echo "      <li><a class=\"sh-mail\"href=\"#\" >Facebook</a></li>
      <li><a class=\"sh-feed\"href=\"#\">You tube</a></li>
      <li><a class=\"sh-tweet\"href=\"#\">Twitter</a></li>
      <li><a class=\"sh-face\"href=\"#\">Site web</a></li>
      <li><a class=\"sh-su\"href=\"#\">LinkdIn</a></li>
      <li><a class=\"sh-digg\"href=\"#\" >Google+</a></li>
      ";
        }
        // line 63
        echo "</ul></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</div> <!--Fiche société-->

<div class=\"box-stand\">
<table style=\"width:100%;\" class=\"tabadr\">
  <tr>
    <td colspan=\"6\">Adresse de société : ";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo " </td>
  </tr>
  <tr>
    <td colspan=\"6\"><div id=\"container\">
     
        <div id=\"map_canvas\" style=\"width:100%; height:300px; float:left;\">
           
        </div>
         <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?sensor=false\"></script>
                                        <script type=\"text/javascript\">
                                                                                
                                            function initialize() 
                                            {
                                                var geocoder  = new google.maps.Geocoder();
                                                var map;
                                              
                                                var latlng = new google.maps.LatLng(";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo ",";
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo ");
                                                var infowindow = new google.maps.InfoWindow();
                                                var myOptions = { 
                                                  zoom: 12,
                                                  mapTypeId: google.maps.MapTypeId.ROADMAP
                                                };
                                                
                                                map = new google.maps.Map(document.getElementById(\"map_canvas\"), myOptions);
                                                
                                                geocoder.geocode( { 'location': latlng }, 
                                                    function(results, status) {
                                                              if (status == google.maps.GeocoderStatus.OK) 
                                                              {
                                                                map.setCenter(results[0].geometry.location);
                                                                var marker = new google.maps.Marker({
                                                                    map: map, 
                                                                    position: results[0].geometry.location
                                                                });                                                                                                
                                                              } 
                                                              else 
                                                              {
                                                                alert(\"Geocode was not successful for the following reason: \" + status);
                                                              }
                                                    });
                                              }
                                                                                     
                                              initialize();
                                              
                                        </script>     \t   
            
            
</div></td>
    </tr>
  <tr>
    <td rowspan=\"3\"><img src=\"images/address-icon1.png\" alt=\"adresse\" /></td>
    <td>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "nomsociete"), "html", null, true);
        echo "</td>
    <td>&nbsp;</td>
    <td rowspan=\"3\"><img src=\"images/address-icon2.png\" alt=\"informations\" /></td>
    <td>Tél : </td>
    <td>";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "telephone"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td class=\"adr\">";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "adresse"), "html", null, true);
        echo "<br>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "codepostal"), "html", null, true);
        echo "&nbsp;";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "ville"), "html", null, true);
        echo "</td>
    <td>&nbsp;</td>
    <td>GSM :</td>
    <td class=\"tel\">";
        // line 136
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "telephone"), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>";
        // line 139
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "ville"), "html", null, true);
        echo " - Tunisie</td>
    <td>&nbsp;</td>
    <td>Fax :</td>
    <td></td>
  </tr>
</table>
</div> <!--Adresse société-->
<div style=\"padding-top:10px;\">
<div class=\"box-stand\">
        <div class=\"wrap \">
        \t\t\t\t<h4>À découvrir</h4>
                        <table style=\"width:100%;\" class=\"tabsoc\">
                          <tr>
                            <td>Produits de la société</td>
                          </tr>
                        </table>
        \t\t\t\t<!-- SLIDER -->\t\t\t\t
\t\t\t\t<div id=\"home-slider\" class=\"lof-slidecontent\">
\t\t\t\t\t<!-- slider content --> 
\t\t\t\t\t<div class=\"main-slider-content\" >
\t\t\t\t\t<ul class=\"sliders-wrap-inner\">
                            <li><img src=\"images/gallery/notfound.png\" title=\"Pas de Produits pour le moment\" alt=\"Produit non exist\" /></li>\t\t\t\t\t  </ul>  \t
\t\t\t\t\t</div>
\t\t\t\t\t<!-- ENDS slider content -->
\t\t\t\t\t<!-- slider nav -->
\t\t\t\t\t<div class=\"navigator-content\" style=\" width: 600px; \">
\t\t\t\t\t  <div class=\"navigator-wrapper\"><!--add-->
\t\t\t\t\t        <ul class=\"navigator-wrap-inner\">
                            \t\t\t\t\t        </ul>
\t\t\t\t\t  </div>
\t\t\t\t\t  <div class=\"button-next\">Suivant</div>
\t\t\t\t\t  <div  class=\"button-previous\">Précédent</div>
\t\t\t\t\t  <!-- REMOVED TILL FIXED <div class=\"button-control\"><span>STOP</span></div> -->
\t\t\t\t\t</div> 
\t\t\t\t\t<!-- slider nav -->
                </div>
        </div>
    <div class=\"clear\"></div>
</div> <!--slide produits end-->
<div class=\"box-stand\">
<h4>Contacter la société</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>Vous Pouvez contacter la société a travers la formulaire suivant:</td>
  </tr>
</table>
\t<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 185
        echo $this->env->getExtension('routing')->getPath("contactsociete");
        echo "\">
<fieldset>
<br>
<label><span style=\"float:left;\">Nom :<strong style=\"color:red;\">*</strong></span>
<input class=\"validate[required]\" type=\"text\" name=\"nom\" id=\"nom\" style=\" margin-left: 130px; \"/>
</label>
<br>
<input type=\"hidden\" value=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["societe"]) ? $context["societe"] : $this->getContext($context, "societe")), "email"), "html", null, true);
        echo "\" name=\"destinataire\">
<label><span style=\"float:left;\">Prénom :<strong style=\"color:red;\">*</strong></span>
<input class=\"validate[required]\" type=\"text\" name=\"prenom\" id=\"prenom\" style=\" margin-left: 109px; \"/>
</label>
<br>
<label><span style=\"float:left;\">E-mail :<strong style=\"color:red;\">*</strong></span>
<input class=\"validate[required,custom[email]]\" type=\"text\" name=\"email\" id=\"email\" style=\" margin-left: 121px; \"/>
</label>
<br>
<label><span style=\"float:left;\">Téléphone :</span>
<input class=\"validate[required]\" type=\"text\" name=\"tel\" id=\"tel\" style=\" margin-left: 100px; \"/>
</label>
<br>
<label><span style=\"float:left;\">Message :<strong style=\"color:red;\">*</strong></span>
<textarea class=\"validate[required,length[10,500]]\" name=\"msg\" id=\"msg\" style=\" margin-left: 104px; \"></textarea>
</label>
<div class=\"btns\"><input name=\"send\" id=\"submit\" type=\"submit\" value=\"Envoyer\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
</fieldset>
</form>
</div>
</div>
 <!--Formulaire pour contactez la société-->
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
        return "BusinessAnnuaireBundle:Annuaire:fichesociete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 192,  291 => 185,  242 => 139,  236 => 136,  226 => 133,  220 => 130,  213 => 126,  173 => 91,  152 => 75,  138 => 63,  129 => 56,  124 => 54,  120 => 53,  116 => 52,  112 => 51,  108 => 50,  103 => 49,  101 => 48,  90 => 40,  81 => 34,  74 => 29,  67 => 27,  62 => 25,  58 => 24,  52 => 21,  45 => 17,  42 => 16,  31 => 6,  28 => 5,);
    }
}
