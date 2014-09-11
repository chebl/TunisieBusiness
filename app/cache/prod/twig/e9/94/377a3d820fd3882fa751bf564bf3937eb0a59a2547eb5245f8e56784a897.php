<?php

/* BusinessAnnuaireBundle:Annuaire:registercompany.html.twig */
class __TwigTemplate_e994377a3d820fd3882fa751bf564bf3937eb0a59a2547eb5245f8e56784a897 extends Twig_Template
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
        echo "<div class=\"grid_1\"> 

<div class=\"box-stand\">
<h4>Connexion</h4>
<table style=\"width:100%;\" class=\"tabsoc\">
  <tr style=\"background:url(css/ui-lightness/images/ui-bg_gloss-wave_35_f6a828_500x100.png);\">
    <td>&nbsp;</td>
  </tr>
</table>
<div style=\" margin-top: 10px; \">
<p style=\"text-align:justify; color:#000;\">
Vous désirez déposée une annonce gratuitement, rien de plus facile ! Vous devez évidement  être 
inscrit, si ce n’est pas le cas complétez les champs ci-dessous « Créer mon compte ».</p>
<p style=\"text-align:justify; color:#000;margin-top: 10px;\">Si vous êtes déjà inscrit, connectez vous à votre compte et choisissez la rubrique dans laquelle vous 
désirez poster une annonce, remplissez ensuite tous les champs de votre annonce et cliquez sur poster. 
Votre annonce sera envoyée à notre service modération pour validation et sera publiée prochainement. 
</p>
</div>
<div class=\"wrap \" style=\" box-shadow: 2px 2px 10px #888888; margin-top:20px;\">
<form method=\"post\" id=\"rech_form\">
<table style=\"width:100%; height:164px;\" class=\"tabinsc\">
  <tr>
    <td colspan=\"2\"><span style=\"color:#8c0101; text-transform:uppercase;font-weight: bold;font-size: 14px;\">Pour Poster une annonce, connectez vous :</span></td>
    </tr>
  <tr>
    <td>E-mail :</td>
    <td><input class=\"validate[required,custom[email]]\" name=\"email\" id=\"email\" type=\"text\" value=\"\"/></td>
  </tr>
  <tr>
    <td>Mot de passe</td>
    <td><input class=\"validate[required]\" name=\"password\" id=\"password\" type=\"password\"/></td>
  </tr>
  <tr>
    <td></td>
    <td><input name=\"signup\" type=\"submit\" value=\"Connexion\" class=\"button_rech\" style=\" float: left; \" /><p style=\" margin: 8px 8px; \"><a href=\"mot-de-passe-oublie.html\">Mot de passe oublier ?</a></p></td>
  </tr>
</table>
     </form>   
</div>
<div class=\"clear\"></div>
</div>

    <div class=\"box-stand\">
<form id=\"pro_form1\" method=\"post\" action=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("annuaire_registercompanypage");
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
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsociete"), 'label');
        echo "</span>
";
        // line 66
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomsociete"), 'widget', array("attr" => array("class" => "validate[required]", "style" => "margin-left: 173px;", "id" => "nom")));
        echo "  
</label>
<br>
<label><span style=\" float: left; \">";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'label');
        echo "</span>
";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'widget', array("attr" => array("class" => "validate[required,custom[email]]", "style" => "margin-left: 164px;", "id" => "email", "name" => "email")));
        echo " 

</label>
<br>
<label><span style=\" float: left; \">";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'label');
        echo "</span>
";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "first"), 'widget', array("attr" => array("class" => "validate[required,length[6,25]]", "style" => "margin-left: 115px;", "id" => "passwor")));
        echo " 

    </label>
<br>
<label><span style=\" float: left; \">";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'label');
        echo "</span>
";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword"), "second"), 'widget', array("attr" => array("class" => "validate[required,confirm[passwor],length[6,25]]", "style" => "margin-left: 22px;", "id" => "confirmpassword")));
        echo " 
        
</label>

<br>
<label><span style=\" float: left; \">Recopier le code de sécurité :</span>
<input class=\"validate[required]\" name=\"in_code\" type=\"text\" id=\"in_code\" size=\"12\" style=\" width: 128px; margin-left: 14px; \"> &nbsp;
    \t<img src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/businessannuaire/includes/captcha/captcha_code_file7052.jpg?rand=2079080691"), "html", null, true);
        echo "\" id='captchaimg' />
</label>
<br>
<label>
<input name=\"certifier\" id=\"certifier\" type=\"checkbox\" class=\"validate[required]\" style=\"float: left;\"/><p style=\" margin-left: 22px; color: black; \">Je certifie que les donn&eacute;es ci-dessus sont exactess et r&eacute;elles</p>
</label>
<div class=\"clear\"></div>
</fieldset>



<h4>Mes coordonnées</h4>

<fieldset>
<br>
<label><span>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'label');
        echo "</span>
";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse"), 'widget', array("attr" => array("class" => "validate[required]", "id" => "adresee", "name" => "adresse")));
        echo " 

</label>
<br>
<label><span>";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'label');
        echo "</span>
";
        // line 113
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codepostal"), 'widget', array("attr" => array("id" => "codp", "name" => "codp")));
        echo " 

</label>
<br>
<label><span>";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'label');
        echo "</span>
";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville"), 'widget', array("attr" => array("id" => "ville", "name" => "ville", "class" => "validate[required]")));
        echo " 

</label>
<br>
<label><span>";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'label');
        echo "</span>
";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone"), 'widget', array("attr" => array("id" => "tel", "name" => "tel")));
        echo " 

</label>
<br>
<label><span>Domaine société :</span>

<select name=\"domainetab\" id=\"domainesoc\" class=\"validate[required]\" onchange=\"return remplirspecialite(document.getElementById('domainesoc').value,\$('#speccat'));\">
        <option value=\"nothing\">--Choisir un domaine--</option>
    ";
        // line 133
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["domaines"]) ? $context["domaines"] : $this->getContext($context, "domaines")));
        foreach ($context['_seq'] as $context["_key"] => $context["domaine"]) {
            // line 134
            echo "        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["domaine"]) ? $context["domaine"] : $this->getContext($context, "domaine")), "nom"), "html", null, true);
            echo "</option>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domaine'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        echo "
    </select>
</label>
<div id=\"speccat\">
</div>
<br>
<label><span>";
        // line 142
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'label');
        echo "</span>
";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file"), 'widget', array("attr" => array("id" => "logo")));
        echo " 

</label>
<br>
<label><span>";
        // line 147
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'label');
        echo "</span>
";
        // line 148
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description"), 'widget', array("attr" => array("id" => "des", "name" => "des")));
        echo " 

</label>
<br>
<div class=\"btns\"><input name=\"modifcorsoc\" id=\"submit\" type=\"submit\" value=\"Inscrire\" style=\" cursor: pointer; float: right; height: 30px; text-decoration:none; font-family: 'Open Sans Condensed', sans-serif; font-weight:700; text-transform:uppercase; font-size:14px; line-height:17px; border-radius:3px; display:inline-block; -webkit-transition:all 0.2s ease; -moz-transition:all 0.2s ease; -o-transition:all 0.2s ease; transition:all 0.2s ease;margin-bottom: 10px; \" /><div class=\"clear\"></div></div>
<div class=\"clear\"></div>
</fieldset>
";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

</form>
</div>

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
        return "BusinessAnnuaireBundle:Annuaire:registercompany.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 155,  258 => 148,  254 => 147,  247 => 143,  243 => 142,  235 => 136,  224 => 134,  220 => 133,  209 => 125,  205 => 123,  198 => 119,  194 => 117,  187 => 113,  183 => 111,  176 => 107,  172 => 105,  154 => 90,  144 => 83,  140 => 81,  133 => 77,  129 => 75,  122 => 71,  118 => 69,  111 => 66,  107 => 64,  91 => 53,  46 => 10,  43 => 9,  35 => 4,  32 => 3,  29 => 2,);
    }
}
