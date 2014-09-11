<?php

/* BusinessAnnuaireBundle::layout.html.twig */
class __TwigTemplate_104a3557855ee1083b6e62075c0cf3f28a52a1d15182758e09ada789d3613534 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'login' => array($this, 'block_login'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>
<meta charset=\"utf-8\">
<title>Tunisie Business : L’annuaire des professionnels Tunisiens</title>
<meta name=\"Description\" content=\"Portail e-Business Tunisie! Inscription 100 % Gratuite, Espace professionnelle complet. D&eacute;couvrez les soci&eacute;t&eacute;s, les produits, les promotions , les annonces,...\">
<meta name=\"Keywords\" content=\"tunisie business, annuaire tunisienne, tunisie annonce, tunisie annonces, tunisie travail, tunisie actualité, annuaire professionnel tunisie, &eacute;conomique tunisie,entreprise tunisie,soci&eacute;t&eacute; tunisie, Soci&eacute;t&eacute; informatique, industriel, Agro-alimentaire, Art et Culture, Commerce et Economie, Communication, Droit, Education et Formation,Finance, Immobilier et Bâtiment, Industrie et Energie, Informatique et Internet, Sant&eacute; et Bien être, Sciences et Technologies, Services, Sport, Textile et Mode, Tourisme et Loisirs, Transport\">
<meta name=\"author\" content=\"chebl.mahmoud\">
<link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "                <!--Main-->
";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
        echo "</head>


<body>
";
        // line 169
        $this->displayBlock('header', $context, $blocks);
        // line 268
        echo "   ";
        $this->displayBlock('body', $context, $blocks);
        // line 269
        echo " 
        </div>
    </section>
";
        // line 272
        $this->displayBlock('footer', $context, $blocks);
        // line 306
        echo "</body>

<!-- Mirrored from www.tunisie-business.net/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Mon, 14 Apr 2014 17:46:54 GMT -->
</html>";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "
<link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/css/style.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/mod_login/css/style.css"), "html", null, true);
        echo "\" /><!--cnx-->

<link type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/css/ui-lightness/jquery-ui-1.8.17.custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" /><!--Recherche-->
<!--Form Validator-->
";
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/formValidator/js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>\t
";
        // line 45
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/js/jconfirmaction.jquery.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/msgBox/Scripts/jquery.msgBox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script><!--MsgBox-->
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/js/ajax-functions.js"), "html", null, true);
        echo "\"></script><!--ajax-functions-->

<script type=\"text/javascript\">
\tjQuery(document).ready(function(\$) {
\t\tJQFUNCTIONS.sel();
\t});
</script>
";
        // line 78
        echo " <!--Connexion-->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/mod_login/js/login.js"), "html", null, true);
        echo "\"></script> <!--Connexion-->
";
        // line 124
        echo "<script type=\"text/javascript\">
function remplirsouscategorie(categ,souscateg)
     {

   
  
   var input2 = \"categ=\"+categ ;
  
  souscateg.html(\"<img src='";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/loader.gif"), "html", null, true);
        echo "'>\");        
    
     \$.post(\"";
        // line 134
        echo $this->env->getExtension('routing')->getPath("annuaire_souscategories");
        echo "\", input2 , function(theResponse){
 
 souscateg.html(theResponse);
  
});
 
     return false;
    }\t\t\t  

function remplirspecialite(domaine,spec)
     {

   
  
   var input2 = \"domaine=\"+domaine ;
  
    
     \$.post(\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("annuaire_specialites");
        echo "\", input2 , function(theResponse){
         
    spec.html(theResponse);
  
});

     return false;
    }\t\t\t  



</script>

";
    }

    // line 169
    public function block_header($context, array $blocks = array())
    {
        // line 170
        echo " 
        <div id=\"widget-header\">
  ";
        // line 172
        $this->displayBlock('login', $context, $blocks);
        // line 174
        echo "               

<div id=\"social_networks-3\" class=\"social_networks_widget\">\t\t
<ul class=\"social-networks\">
<li class=\"display-icons\">
<a rel=\"external\" title=\"twitter\"  href=\"https://twitter.com/TunisieBusiness\" target=\"_blank\">
<img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/twitter.png"), "html", null, true);
        echo "\" alt=\"twitter TunisieBusiness\">
<img src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/twitter-hr.png"), "html", null, true);
        echo "\" class=\"hr-img\" alt=\"twitter TunisieBusiness\"></a></li>
<li class=\"display-icons\">
<a rel=\"external\" title=\"facebook\"  href=\"https://www.facebook.com/TunisieBusiness\" target=\"_blank\">
<img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/facebook.png"), "html", null, true);
        echo "\" alt=\"facebook TunisieBusiness\">
<img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/facebook-hr.png"), "html", null, true);
        echo "\" class=\"hr-img\" alt=\"facebook TunisieBusiness\"></a></li>
<li class=\"display-icons\">
<a rel=\"external\" title=\"google\"  href=\"https://plus.google.com/u/0/105367995533699353729\" target=\"_blank\">
<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/google.png"), "html", null, true);
        echo "\" alt=\"google plus TunisieBusiness\">
<img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/google-hr.png"), "html", null, true);
        echo "\" class=\"hr-img\" alt=\"google plus TunisieBusiness\"></a></li>
<li class=\"display-icons\">
<a rel=\"external\" title=\"Youtube\" href=\"http://www.youtube.com/user/TunisieBusiness\" target=\"_blank\">
<img src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/youtube.png"), "html", null, true);
        echo "\" alt=\"Youtube TunisieBusiness\">
<img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/icons/youtube-hr.png"), "html", null, true);
        echo "\" class=\"hr-img\" alt=\"Youtube TunisieBusiness\"></a></li>
</ul>
</div> <!--social network-->\t        \t
</div> 
<div itemscope itemtype=\"http://schema.org/Article\" class=\"white-shape\">
<header>
    
\t<div class=\"head-content\">
\t\t<div style=\"float:left;margin: -123px 0px 0px -40px; width:300px;\"><img src=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/annuaire_tunisie.png"), "html", null, true);
        echo "\" alt=\"annuaire tunisie\" style=\" width: 346px; height: 272px; \" title=\"L’annuaire des professionnels Tunisiens\"></div> <!--Title Site-->
        <div class=\"menu\">
            <nav>
            <ul class=\"sf-menu sf-js-enabled\">
            <li class=\"current\"><a href=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("annuaire_homepage");
        echo "\">Accueil<span></span></a></li>
            <li class=\"\"><a href=\"#\">Annuaire<span></span></a></li>
            <li class=\"\"><a href=\"";
        // line 207
        echo $this->env->getExtension('routing')->getPath("annuaire_listannonces");
        echo "\">Annonces<span></span></a></li>
            <li class=\"\"><a href=\"";
        // line 208
        echo $this->env->getExtension('routing')->getPath("annuaire_listpromotions");
        echo "\">Promotions<span></span></a></li>
            <li class=\"\"><a href=\"#\">La M&eacute;t&eacute;o<span></span></a></li>
            <li class=\"\"><a href=\"";
        // line 210
        echo $this->env->getExtension('routing')->getPath("annuaire_contact");
        echo "\">Contact<span></span></a></li>
            </ul>
            <div class=\"clear\"></div>
            </nav>
            <div class=\"clear\"></div>
            </div> <!--Menu-->
\t\t<div class=\"logo\">
            <h1 style=\" color: black; padding: 8px 0px 0px 100px; \">L’annuaire des professionnels Tunisiens</h1>
            <p><span class=\"courch\">Cour de jour :<br><strong style=\"color:black; font-size:12px;\">1€ = 2,253 TND</strong></span></p>
                    <div class=\"sliderkit photoslider-mini\" style=\"width: 790px; height: 92px;position: absolute;margin: 14px 0px 0px 162px;\">
                        <div class=\"sliderkit-panels\">
                            <div class=\"sliderkit-panel\">
                                <a href=\"#\" title=\"Annonce | TunisieBusiness\"><img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/images/entete/votre-annonce.png"), "html", null, true);
        echo "\" alt=\"Annonce Tunisie Bussines\" style=\" width: 790px; height: 92px; \"/></a>
                            </div>
                            
                        </div>
                    </div><!--photoslider-mini -->
\t\t</div> <!--Logo & pub entet-->
\t\t<div>

</div> <!--table annonce top menu-->
\t\t<div class=\"clear\"></div> <!--div clear-->
\t</div>
\t<div class=\"clear\"></div> <!--div clear-->
</header>
<section id=\"content\">
\t<div class=\"container_12\">
\t<div class=\"grid_12\"><div class=\"line-2\"></div></div>\t<!--line-->
\t\t<div class=\"grid_4\">
\t\t\t<div>
    \t\t\t<div class=\"tabs\"> 
       \t\t\t\t<div class=\"tab\">
           \t\t\t\t<div class=\"content\">
\t\t\t\t\t\t\t<form action=\"";
        // line 243
        echo $this->env->getExtension('routing')->getPath("annuaire_search");
        echo "\" method=\"get\">
                  <div>
                               <div style=\"color:white; font-size:16px;margin-bottom: 15px;float: left;\">Trouvez facilement l’entreprise que vous recherchée</div>
                               <div style=\"color:white; font-size:16px;margin-bottom: 15px;margin-left: 622px;\"><a href=\"#\" title=\"Ajouter Votre Soci&eacute;t&eacute; au portail Tunisien | TunisieBusiness\" style=\" color: white; text-decoration:underline;\">Inscrivez votre soci&eacute;t&eacute; gratuitement</a></div>
                  </div>  
               <div><strong style=\"color:white; font-size:16px;float: left;margin-right: 20px;\">Qui, Quoi</strong></div>
               <div><input name=\"motcle\" id=\"motcle\" type=\"text\" style=\" width: 30%; height: 20px; border-radius: 5px; float: left;\"/></div>
               <div><strong style=\"color:white; font-size:16px;margin-left: 40px;margin-right: 20px;float: left;\">Où</strong></div>
               <div><input name=\"local\" id=\"local\" type=\"text\" style=\" width: 30%; height: 20px; border-radius: 5px; float: left;\"/></div>
               <div><input name=\"rechercherinf\" type=\"submit\" value=\"Trouver\" class=\"button_rech\" style=\" margin-left: 40px; \"/></div>
               <div><span style=\"content: '';position: absolute;border-left: 10px solid transparent;border-right: 10px solid transparent;border-bottom: 10px solid #fbb144;margin-left: 100px;margin-top: 2px;\"></span></div>
\t\t\t\t<div><span style=\"content: '';position: absolute;border-left: 10px solid transparent;border-right: 10px solid transparent;border-bottom: 10px solid #fbb144;margin-left: 460px;margin-top: 2px;\"></span></div>
                <div style=\"color: #000;background-color: #fbb144;width: 255px;margin-left: 95px;margin-top: 10px;height: 24px;float:left;padding-left: 15px;\">Ex: Centre d'appel, Architecte,...</div>
                <div style=\"color: #000;background-color: #fbb144;width: 255px;margin-left: 88px;margin-top: 10px;height: 24px;float:left;padding-left: 15px;\">Ex: Sousse, Tunis, Sfax,...</div>
                </form>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div> <!--rechercheSoc-->
\t<div class=\"grid_12\"><div class=\"line-2\"></div></div>\t<!--line--><!--include left-->

        

";
    }

    // line 172
    public function block_login($context, array $blocks = array())
    {
        // line 173
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BusinessAnnuaireBundle:Annuaire:login"));
        echo "   
 ";
    }

    // line 268
    public function block_body($context, array $blocks = array())
    {
        echo "     
";
    }

    // line 272
    public function block_footer($context, array $blocks = array())
    {
        // line 273
        echo "<footer>
<a href=\"#\" id=\"toTop\" title=\"http://www.tunisie-business.net\" style=\"margin: auto; right: 5%; display: inline;\"><span id=\"toTopHover\" style=\"opacity: -1;\"></span></a>
<div class=\"container_12\">
<div class=\"grid_12\">
<div class=\"line-2\"></div>\t<!--line-->


<div class=\"box-mfooter\">
    <ul class=\"menu2\">
    <li><a href=\"#\" >Inscription</a></li>
    <li><a href=\"#\" >Annuaire</a></li>
    <li><a href=\"#\" >Annonces</a></li>
    <li><a href=\"#\" >Promotions</a></li>
    <li><a href=\"#\" >La Météo</a></li>
    <li><a href=\"#\" >La Bourse</a></li>
    <li><a href=\"#\" >CGU - Vié Privé</a></li>
    <li><a href=\"#\" >Espace Entreprise</a></li>
    <li><a href=\"#\" >Contact</a></li>
    
    </ul>
</div>

<div class=\"line-footer\"></div>\t<!--line-->
<p class=\"foot-textr\">Recherche avancée sur Tunisie Business (Soci&eacute;t&eacute;, Annonce, Promotion, Actualit&eacute;,...)<br>

<gcse:search></gcse:search>
</p>
<p class=\"foot-text\">Copyright © 2013 Created By&nbsp;<a href=\"http://www.eurotech-web.com/\" target=\"_blank\" title=\"Euro Tech sarl\">Euro Tech</a>&nbsp; </p>
</div>
<div class=\"clear\"></div>
</div>
</footer>
";
    }

    public function getTemplateName()
    {
        return "BusinessAnnuaireBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  357 => 273,  354 => 272,  347 => 268,  340 => 173,  337 => 172,  308 => 243,  284 => 222,  269 => 210,  264 => 208,  260 => 207,  255 => 205,  248 => 201,  237 => 193,  233 => 192,  227 => 189,  223 => 188,  217 => 185,  213 => 184,  207 => 181,  203 => 180,  195 => 174,  193 => 172,  189 => 170,  186 => 169,  168 => 151,  148 => 134,  143 => 132,  133 => 124,  129 => 79,  126 => 78,  116 => 48,  112 => 47,  106 => 45,  101 => 39,  98 => 30,  91 => 17,  86 => 15,  82 => 14,  79 => 13,  76 => 12,  69 => 306,  67 => 272,  62 => 269,  59 => 268,  57 => 169,  51 => 165,  49 => 30,  46 => 29,  44 => 12,  40 => 11,  36 => 10,  25 => 1,  138 => 103,  124 => 92,  37 => 8,  31 => 4,  28 => 3,);
    }
}
